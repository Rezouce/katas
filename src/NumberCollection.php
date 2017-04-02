<?php

namespace Kata;

class NumberCollection implements \IteratorAggregate
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
}
