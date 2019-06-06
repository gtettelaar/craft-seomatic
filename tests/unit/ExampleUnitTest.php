<?php

namespace nystudio107\seomatictests\unit;

use Codeception\Test\Unit;
use nystudio107\seomatic\Seomatic;
use UnitTester;
use Craft;

class ExampleUnitTest extends Unit
{
    // Public properties
    // =========================================================================

    /**
     * @var UnitTester
     */
    protected $tester;

    // Public methods
    // =========================================================================

    // Tests
    // =========================================================================

    /**
     *
     */
    public function testCraftEdition()
    {
        $this->assertInstanceOf(
            Seomatic::class,
            Seomatic::$plugin
        );
    }
}
