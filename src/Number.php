<?php

namespace Kata;

class Number
{

    private $int;

    public function __construct($int)
    {
        $this->int = $int;
    }

    public function isPrime()
    {
        return $this->int == 2;
    }
}
