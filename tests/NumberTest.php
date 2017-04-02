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

    /** @test */
    public function check_if_numbers_from_3_to_1000_are_primes()
    {
        $listOfPrimeNumbers = require __DIR__ . '/../resources/1000_first_prime_numbers.php';

        for ($i = 0; $i <= end($listOfPrimeNumbers); ++$i) {
            $number = new Number($i);

            if (in_array($i, $listOfPrimeNumbers)) {
                $this->assertTrue($number->isPrime(), sprintf('The number %s should be prime', $i));
            } else {
                $this->assertFalse($number->isPrime(), sprintf('The number %s should not be prime', $i));
            }
        }
    }
}
