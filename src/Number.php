<?php

namespace Kata;

class Number
{

    private $int;

    public function __construct($int)
    {
        $this->int = $int;
    }

    /**
     * The only prime pair number is 2.
     *
     * @return bool
     */
    public function isPrime()
    {
        return $this->int == 2;
    }
}
