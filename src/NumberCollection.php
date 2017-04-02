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

        array_filter($this->numbers, function ($number) use (&$foundIntegers) {
            $found = in_array($number->int, $foundIntegers);
            $foundIntegers[] = $number->int;

            return !$found;
        });
    }
}
