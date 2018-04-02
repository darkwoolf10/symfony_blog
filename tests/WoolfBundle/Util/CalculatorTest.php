<?php

namespace Tests\WoolfBundle\Util;

use PHPUnit\Framework\TestCase;
use WoolfBundle\Util\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(30, 12);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals(42, $result);
    }
}
