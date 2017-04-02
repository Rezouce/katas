<?php

namespace Test\Kata;

use Kata\Number;
use PHPUnit\Framework\TestCase;

class NumberTest extends TestCase
{

    /** @test */
    public function return_its_int_value()
    {
        $number = new Number(855);

        $this->assertEquals(855, $number->toInt());
    }

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
    public function get_the_highest_prime_number_composing_a_number()
    {
        $testedNumbers = [
            2 => 2,
            25 => 5,
            1923 => 23,
            18572 => 857,
        ];

        foreach ($testedNumbers as $testedNumber => $result) {
            $number = new Number($testedNumber);

            $this->assertEquals($result, $number->getHighestComposingPrimeNumber()->toInt());
        }
    }


    /** @test */
    public function throws_an_exception_when_trying_to_get_the_highest_prime_number_composing_a_number_without_prime_numbers_inside()
    {
        $number = new Number(444);

        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('Could not find a prime number composing the number 444.');

        $number->getHighestComposingPrimeNumber();
    }
}
