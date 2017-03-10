<?php
namespace Test\Kata;

use Kata\LatinToRomanNumberConverter;
use PHPUnit\Framework\TestCase;

class LatinToRomanNumberConverterTest extends TestCase
{

    /** @test */
    public function can_convert_a_simple_number()
    {
        $subject = new LatinToRomanNumberConverter();

        $this->assertEquals('I', $subject->convert(1));
    }
}
