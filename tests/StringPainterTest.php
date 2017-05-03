<?php

namespace Test\Kata;

use Kata\StringPainter;
use PHPUnit\Framework\TestCase;

class StringPainterTest extends TestCase
{

    /** @test */
    public function returns_a_string_from_an_array()
    {
        $painter = new StringPainter;

        $arrayToDraw = [
            ['0', '0', '0', '0', '0'],
            ['.', '.', '.', '.', '0'],
            ['0', '0', '0', '.', '0'],
            ['0', '.', '.', '.', '0'],
            ['0', '0', '0', '0', '0'],
        ];

        $expectedString = '00000' . "\n"
                        . '....0' . "\n"
                        . '000.0' . "\n"
                        . '0...0' . "\n"
                        . '00000';

        $this->assertEquals($expectedString, $painter->draws($arrayToDraw));
    }
}
