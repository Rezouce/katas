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
        // 0 and 1 are not prime numbers.
        if ($this->int < 2) {
            return false;
        }

        // 2 is a prime number.
        if ($this->int == 2) {
            return true;
        }

        // All other pair numbers are not prime.
        if ($this->int % 2 == 0) {
            return false;
        }

        // If a number can be divided by anything else than 1 or itself, it's not a prime number.
        for ($i = 3; $i <= $this->getMaxNumberToTestPrime(); $i += 2) {
            if ($this->int % $i == 0) {
                return false;
            }
        }

        return true;
    }

    /**
     * There is no need to test with numbers larger than the square root of the tested int.
     */
    private function getMaxNumberToTestPrime()
    {
        return floor(sqrt($this->int));
    }

    public function getComposingNumbers()
    {
        $composingNumbers = [$this];

        if ($this->int >= 10 && $this->int <= 99) {
            $composingNumbers = array_merge($composingNumbers, [
                new Number(((string)$this->int)[0]),
                new Number(((string)$this->int)[1]),
            ]);
        }

        return $composingNumbers;
    }
}
