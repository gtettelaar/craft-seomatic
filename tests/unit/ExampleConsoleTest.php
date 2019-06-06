<?php

namespace nystudio107\seomatictests\unit;

use craft\test\console\ConsoleTest;
use yii\console\ExitCode;

class ExampleConsoleTest extends ConsoleTest
{
    public function testCommand()
    {
        $this->consoleCommand('seomatic/sitemap/test')
            ->stdOut('22')
            ->stderr('123321123')
            ->outputCommand('An output command')
            ->exitCode(ExitCode::OK)
            ->run();
    }
}
