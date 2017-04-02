<?php

namespace Test\Kata;

use Kata\Number;
use PHPUnit\Framework\TestCase;

class NumberTest extends TestCase
{

    /** @test */
    public function check_if_numbers_from_0_to_7919_are_primes()
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
