<?php

namespace Test\Kata;

use Kata\Number;
use PHPUnit\Framework\TestCase;

class NumberTest extends TestCase
{

    /** @test */
    public function check_if_1_is_prime()
    {
        $number = new Number(1);

        $this->assertFalse($number->isPrime());
    }

    /** @test */
    public function check_if_0_is_prime()
    {
        $number = new Number(0);

        $this->assertFalse($number->isPrime());
    }
}
