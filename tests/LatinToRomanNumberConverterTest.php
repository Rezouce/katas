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

    /** @test */
    public function can_convert_5_to_V()
    {
        $subject = new LatinToRomanNumberConverter();

        $this->assertEquals('V', $subject->convert(5));
    }

    /** @test */
    public function can_convert_10_to_X()
    {
        $subject = new LatinToRomanNumberConverter();

        $this->assertEquals('X', $subject->convert(10));
    }

    /** @test */
    public function can_convert_50_to_L()
    {
        $subject = new LatinToRomanNumberConverter();

        $this->assertEquals('L', $subject->convert(50));
    }

    /** @test */
    public function can_convert_100_to_C()
    {
        $subject = new LatinToRomanNumberConverter();

        $this->assertEquals('C', $subject->convert(100));
    }

    /** @test */
    public function can_convert_500_to_D()
    {
        $subject = new LatinToRomanNumberConverter();

        $this->assertEquals('D', $subject->convert(500));
    }

    /** @test */
    public function can_convert_1000_to_M()
    {
        $subject = new LatinToRomanNumberConverter();

        $this->assertEquals('M', $subject->convert(1000));
    }

    /** @test */
    public function can_convert_4_to_IV()
    {
        $subject = new LatinToRomanNumberConverter();

        $this->assertEquals('IV', $subject->convert(4));
    }

    /** @test */
    public function can_convert_9_to_IX()
    {
        $subject = new LatinToRomanNumberConverter();

        $this->assertEquals('IX', $subject->convert(9));
    }

    /** @test */
    public function can_convert_40_to_XL()
    {
        $subject = new LatinToRomanNumberConverter();

        $this->assertEquals('XL', $subject->convert(40));
    }

    /** @test */
    public function can_convert_90_to_XC()
    {
        $subject = new LatinToRomanNumberConverter();

        $this->assertEquals('XC', $subject->convert(90));
    }

    /** @test */
    public function can_convert_400_to_CD()
    {
        $subject = new LatinToRomanNumberConverter();

        $this->assertEquals('CD', $subject->convert(400));
    }

    /** @test */
    public function can_convert_900_to_CM()
    {
        $subject = new LatinToRomanNumberConverter();

        $this->assertEquals('CM', $subject->convert(900));
    }
}
