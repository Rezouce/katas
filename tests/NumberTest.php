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

    /** @test */
    public function one_digit_numbers_are_composed_of_themselves_only()
    {
        for ($i = 0; $i <= 9; ++$i) {
            $number = new Number($i);

            $this->assertEquals([$number], $number->getComposingNumbers());
        }
    }

    /** @test */
    public function two_digit_numbers_are_composed_of_1_digit_numbers_and_themselves()
    {
        for ($i = 10; $i <= 99; ++$i) {
            $number = new Number($i);

            $expectedNumbers = [
                $number,
                new Number(((string)$i)[0]),
                new Number(((string)$i)[1]),
            ];

            $this->assertEquals($expectedNumbers, $number->getComposingNumbers());
        }
    }
}
