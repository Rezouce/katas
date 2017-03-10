<?php
namespace Kata;

class LatinToRomanNumberConverter
{

    public function convert(int $latinNumber)
    {
        return str_pad('', $latinNumber, 'I');
    }
}
