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

    /** @test */
    public function check_if_2_is_prime()
    {
        $number = new Number(2);

        $this->assertTrue($number->isPrime());
    }

    /** @test */
    public function check_that_all_pair_values_greater_than_2_are_not_prime()
    {
        for ($i = 4; $i < 100; $i += 2) {
            $number = new Number($i);
            $this->assertFalse($number->isPrime());
        }
    }
}
