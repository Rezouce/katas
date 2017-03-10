<?php
namespace Test\Kata;

use Kata\LatinToRomanNumberConverter;
use PHPUnit\Framework\TestCase;

class LatinToRomanNumberConverterTest extends TestCase
{

    /** @test */
    public function can_convert_latin_numbers_to_roman_numbers()
    {
        $subject = new LatinToRomanNumberConverter();

        $this->assertEquals('MCMLIV', $subject->convert(1954));
        $this->assertEquals('MCMXC', $subject->convert(1990));
        $this->assertEquals('MMXIV', $subject->convert(2014));
        $this->assertEquals('MMMMCMXCIX', $subject->convert(4999));
        $this->assertEquals('MCDXXXV', $subject->convert(1435));
        $this->assertEquals('MCMXLIX', $subject->convert(1949));
    }
}
