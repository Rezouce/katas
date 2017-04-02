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
}
