<?php
namespace Kata;

class LatinToRomanNumberConverter
{

    private $map = [
        'IIIII' => 'V',
        'VV' => 'X',
        'XXXXX' => 'L',
        'LL' => 'C',
        'CCCCC' => 'D',
        'DD' => 'M',
    ];

    public function convert(int $latinNumber)
    {
        $romanNumber = str_pad('', $latinNumber, 'I');
        $romanNumber = str_replace(array_keys($this->map), $this->map, $romanNumber);

        return $romanNumber;
    }
}
