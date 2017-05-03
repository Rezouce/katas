<?php

namespace Test\Kata;

use Kata\Spiral;
use Kata\StringPainter;
use PHPUnit\Framework\TestCase;

class SpiralTest extends TestCase
{

    /** @test */
    public function throws_an_exception_when_trying_to_draw_a_spiral_with_a_size_inferior_to_5()
    {
        $spiral = new Spiral(new StringPainter);

        $this->expectException(\RuntimeException::class);
        $this->expectExceptionMessage('A spiral must have a minimal of 5 sides.');

        $spiral->draws($sides = 2);
    }

    /** @test */
    public function it_draws_a_spiral_with_a_size_of_5()
    {
        $spiral = new Spiral(new StringPainter);

        $expectedString = '00000' . "\n"
                        . '....0' . "\n"
                        . '000.0' . "\n"
                        . '0...0' . "\n"
                        . '00000';

        $this->assertEquals($expectedString, $spiral->draws($sides = 5));
    }

    /** @test */
    public function it_draws_a_spiral_with_a_size_of_10()
    {
        $spiral = new Spiral(new StringPainter);

        $expectedString = '0000000000' . "\n"
                        . '.........0' . "\n"
                        . '00000000.0' . "\n"
                        . '0......0.0' . "\n"
                        . '0.0000.0.0' . "\n"
                        . '0.0..0.0.0' . "\n"
                        . '0.0....0.0' . "\n"
                        . '0.000000.0' . "\n"
                        . '0........0' . "\n"
                        . '0000000000';

        $this->assertEquals($expectedString, $spiral->draws($sides = 10));
    }
}
