<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license https://craftcms.github.io/license/
 */

namespace crafttests\functional;

use Craft;
use craft\elements\User;
use FunctionalTester;
use nystudio107\seomatic\Seomatic;

/**
 * Class FunctionalCest
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @author Global Network Group | Giel Tettelaar <giel@yellowflash.net>
 * @since 3.2
 */
class FunctionalCest
{
    // Public Methods
    // =========================================================================

    // Tests
    // =========================================================================

    /**
     * @param FunctionalTester $I
     */
    public function _before(FunctionalTester $I)
    {
        $userEl = User::find()
            ->admin()
            ->one();

        Craft::$app->getUser()->setIdentity($userEl);
    }

    public function seeSeomaticHomepage(FunctionalTester $I)
    {
        $I->amOnPage('?p=/admin/seomatic/global');
        $I->see('Global SEO');
    }
    /**
     * @param FunctionalTester $I
     */
    public function seePluginPageWithSeoMatic(FunctionalTester $I)
    {
        $I->amOnPage('?p=/admin/settings/plugins');
        $I->see('Plugins');
        $I->see('Seomatic');
    }
}
