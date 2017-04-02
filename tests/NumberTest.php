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
    public function N_digits_numbers_are_composed_of_themselves_and_N_minus_1_digit_numbers_up_to_1_digit_numbers_without_any_duplicated_numbers()
    {
        $testedNumbers = [1, 5, 9, 10, 55, 100, 110, 2000, 9001, 8456];

        foreach ($testedNumbers as $i) {
            $number = new Number($i);

            $this->assertListNumbersForInt($i, $number->getComposingNumbers());
        }
    }

    private function assertListNumbersForInt($int, array $listNumbers)
    {
        $listOfIntegers = $this->getListOfIntComposingAnInt($int);

        $expectedNumbers = array_map(function ($int) {
            return new Number($int);
        }, $listOfIntegers);

        foreach ($expectedNumbers as $indexInteger => $expectedNumber) {
            $found = false;

            foreach ($listNumbers as $indexNumber => $number) {
                if ($expectedNumber == $number) {
                    $found = true;
                    unset($listNumbers[$indexNumber]);
                    break;
                }
            }

            $this->assertTrue(
                $found,
                sprintf('The composing number %s was not found for number %s', $listOfIntegers[$indexInteger], $int)
            );
        }

        $this->assertEmpty(
            $listNumbers,
            sprintf('The list of composing numbers from %s, has %s duplication(s)', $int, count($listNumbers))
        );
    }

    private function getListOfIntComposingAnInt($int)
    {
        $ints = [];

        for ($i = 0; $i < strlen($int); ++$i) {
            for ($j = 1; $j + $i <= strlen($int); ++$j) {
                $ints[] = (int)substr($int, $i, $j);
            }
        }

        return array_unique($ints);
    }
}
