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

    /** @test */
    public function count_the_number_of_items_in_the_collection()
    {
        $numberCollection = new NumberCollection([new Number(1), new Number(10), new Number(5)]);

        $this->assertCount(3, $numberCollection);
    }

    /** @test */
    public function can_remove_duplicate_numbers()
    {
        $numbers = [new Number(1), new Number(10)];

        $numberCollection = new NumberCollection(array_merge($numbers, $numbers));
        $this->assertCount(4, $numberCollection);

        $numberCollection->removeDuplicate();

        $this->assertEquals($numbers, $numberCollection->getIterator()->getArrayCopy());
    }

    /** @test */
    public function compare_if_2_collections_are_equals()
    {
        $numberCollection1 = new NumberCollection([new Number(1), new Number(10)]);
        $numberCollection2 = new NumberCollection([new Number(10), new Number(1)]);
        $numberCollection3 = new NumberCollection([new Number(1), new Number(10), new Number(3)]);
        $numberCollection4 = new NumberCollection([new Number(1)]);

        $this->assertTrue($numberCollection1->isEqual($numberCollection1));
        $this->assertTrue($numberCollection1->isEqual($numberCollection2));
        $this->assertFalse($numberCollection1->isEqual($numberCollection3));
        $this->assertFalse($numberCollection1->isEqual($numberCollection4));
    }

    /** @test */
    public function rsort_a_collection()
    {
        $number1 = new Number(1);
        $number2 = new Number(2);
        $number3 = new Number(3);

        $numberCollection = new NumberCollection([$number1, $number3, $number2]);
        $numberCollection->rsort();

        $this->assertEquals([$number3, $number2, $number1], $numberCollection->getIterator()->getArrayCopy());
    }
}
