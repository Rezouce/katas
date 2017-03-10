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
        'IIII' => 'IV',
        'VIV' => 'IX',
        'XXXX' => 'XL',
        'LXL' => 'XC',
        'CCCC' => 'CD',
        'DCD' => 'CM',
    ];

    public function convert(int $latinNumber)
    {
        $romanNumber = str_pad('', $latinNumber, 'I');
        $romanNumber = str_replace(array_keys($this->map), $this->map, $romanNumber);

        return $romanNumber;
    }
}
