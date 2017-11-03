<?php
namespace Kata\MagicThree;

class MagicThree
{

    public function hasValidNumbers(array $numbers)
    {
        return $this->checkSum(current($numbers), $numbers, 2);
    }

    private function checkSum(int $sum, array $numbers, int $numbersLeft)
    {
        if ($numbersLeft == 0) {
            return $sum == 0;
        }

        return array_reduce($numbers, function($carry, $currentNumber) use ($sum, $numbers, $numbersLeft) {
            return $carry || $this->checkSum($sum + $currentNumber, $numbers, $numbersLeft - 1);
        }, false);
    }
}
