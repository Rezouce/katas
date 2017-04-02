<?php

namespace Kata;

class NumberCollection implements \IteratorAggregate, \Countable
{

    private $numbers;

    public function __construct($numbers)
    {
        $this->numbers = $numbers;
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->numbers);
    }

    public function count()
    {
        return count($this->numbers);
    }

    public function removeDuplicate()
    {
        $foundIntegers = [];

        $this->numbers = array_filter($this->numbers, function (Number $number) use (&$foundIntegers) {
            $found = in_array($number->toInt(), $foundIntegers);
            $foundIntegers[] = $number->toInt();

            return !$found;
        });
    }

    public function isEqual(NumberCollection $collection)
    {
        $collectionToInt1 = $this->getIntValues();
        $collectionToInt2 = $collection->getIntValues();

        return empty(array_diff($collectionToInt1, $collectionToInt2))
            && count($collectionToInt1) == count($collectionToInt2);
    }

    private function getIntValues()
    {
        return array_map(function (Number $number) {
            return $number->toInt();
        }, $this->numbers);
    }

    public function rsort()
    {
        usort($this->numbers, function(Number $number1, Number $number2) {
            return $number2->toInt() <=> $number1->toInt();
        });
    }
}
