<?php
namespace Kata;

class LatinToRomanNumberConverter
{

    public function convert(int $latinNumber)
    {
        $romanNumber = str_pad('', $latinNumber, 'I');

        $romanNumber = str_replace('IIIII', 'V', $romanNumber);
        $romanNumber = str_replace('VV', 'X', $romanNumber);
        $romanNumber = str_replace('XXXXX', 'L', $romanNumber);
        $romanNumber = str_replace('LL', 'C', $romanNumber);
        $romanNumber = str_replace('CCCCC', 'D', $romanNumber);
        $romanNumber = str_replace('DD', 'M', $romanNumber);

        return $romanNumber;
    }
}
