<?php

namespace Test\Kata;

use Kata\Number;
use Kata\NumberCollection;
use PHPUnit\Framework\TestCase;

class NumberCollectionTest extends TestCase
{

    /** @test */
    public function can_iterate_through_the_collection()
    {
        $numbers = [new Number(1), new Number(10), new Number(5)];

        $numberCollection = new NumberCollection($numbers);

        foreach ($numberCollection as $index => $number) {
            $this->assertContains($number, $numbers);
            unset($numbers[$index]);
        }

        $this->assertEmpty($numbers);
    }
}