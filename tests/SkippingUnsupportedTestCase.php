<?php

namespace Behat\Mink\Tests\Driver;

use Behat\Mink\Exception\UnsupportedDriverActionException;
use PHPUnit\Framework\TestCase as BaseTestCase;

class SkippingUnsupportedTestCase extends BaseTestCase
{
    /**
     * @internal
     */
    protected function onNotSuccessfulTest(\Throwable $t): void
    {
        if ($t instanceof UnsupportedDriverActionException) {
            $this->markTestSkipped($t->getMessage());
        }

        parent::onNotSuccessfulTest($t);
    }
}
