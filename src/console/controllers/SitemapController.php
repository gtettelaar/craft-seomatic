<?php
/**
 * SEOmatic plugin for Craft CMS 3.x
 *
 * @link      https://nystudio107.com/
 * @copyright Copyright (c) 2017 nystudio107
 * @license   https://nystudio107.com/license
 */

namespace nystudio107\seomatic\console\controllers;

use nystudio107\seomatic\models\MetaBundle;
use nystudio107\seomatic\Seomatic;

use Craft;
use craft\helpers\App;

use yii\console\Controller;
use yii\console\ExitCode;

/**
 * SEOmatic Sitemap command
 *
 * @author    nystudio107
 * @package   Seomatic
 * @since     3.0.0
 */
class SitemapController extends \craft\console\Controller
{
    // Public Properties
    // =========================================================================

    /**
     * @var null|string
     */
    public $handle;

    /**
     * @var null|int
     */
    public $siteId;

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array
     */
    protected $allowAnonymous = [
    ];

    // Public Methods
    // =========================================================================

    /**
     * @param string $actionID
     *
     * @return array|string[]
     */
    public function options($actionID): array
    {
        return [
            'handle',
            'siteId',
        ];
    }


    /**
     * Dont use this method - it wont actually execute anything.
     * It is just used internally to test Craft-based console controller testing.
     *
     * @return int
     * @internal
     */
    public function actionTest(): int
    {
        $this->stdout('22');
        $this->stderr('123321123');

        $this->outputCommand('An output command');

        return ExitCode::OK;
    }

    /**
     * Generate a sitemap. You can pass in a --handle and/or a --siteId
     */
    public function actionGenerate()
    {
        echo 'Generating sitemap'.PHP_EOL;
        if ($this->siteId !== null) {
            $siteIds[] = $this->siteId;
        } else {
            $siteIds = Craft::$app->getSites()->getAllSiteIds();
            if (!\is_array($siteIds)) {
                $siteIds = [$siteIds];
            }
        }
        // This might take a while
        App::maxPowerCaptain();
        // Process the sitemap generation
        foreach ($siteIds as $siteId) {
            $metaBundles = Seomatic::$plugin->metaBundles->getContentMetaBundlesForSiteId($siteId);
            Seomatic::$plugin->metaBundles->pruneVestigialMetaBundles($metaBundles);
            /** @var MetaBundle $metaBundle */
            foreach ($metaBundles as $metaBundle) {
                $process = false;
                if ($this->handle === null || $this->handle === $metaBundle->sourceHandle) {
                    $process = true;
                }
                if ($metaBundle->metaSitemapVars->sitemapUrls && $process) {
                    echo 'Generating sitemap for '
                        .$metaBundle->sourceType
                        .' '
                        .$metaBundle->sourceName
                        .', siteId '
                        .$siteId;
                    Seomatic::$plugin->sitemaps->invalidateSitemapCache(
                        $metaBundle->sourceHandle,
                        $siteId,
                        $metaBundle->sourceBundleType,
                        true
                    );
                    Craft::$app->getQueue()->run();
                    echo '---'.PHP_EOL;
                }
            }
        }
    }

    // Protected Methods
    // =========================================================================
}
