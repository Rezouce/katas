<?php
namespace Test\Kata;

use Kata\LatinToRomanNumberConverter;
use PHPUnit\Framework\TestCase;

class LatinToRomanNumberConverterTest extends TestCase
{

    /** @test */
    public function can_convert_1_to_I()
    {
        $subject = new LatinToRomanNumberConverter();

        $this->assertEquals('I', $subject->convert(1));
    }

    /** @test */
    public function can_convert_2_to_II()
    {
        $subject = new LatinToRomanNumberConverter();

        $this->assertEquals('II', $subject->convert(2));
    }
}
