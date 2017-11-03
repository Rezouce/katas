<?php declare(strict_types=1);

namespace Test\Kata\MagicThree;

use Kata\MagicThree\MagicThree;
use PHPUnit\Framework\TestCase;

class MagicThreeTest extends TestCase
{
    /** @test */
    public function itSucceedWithAnArrayContainingValuesThatCanMatch0()
    {
        $magicThree = new MagicThree();

        $this->assertTrue($magicThree->hasValidNumbers([-10, 4, 5, 7, 3]));
    }

    /** @test */
    public function itSucceedWithAnArrayWithOnly0()
    {
        $magicThree = new MagicThree();

        $this->assertTrue($magicThree->hasValidNumbers([0]));
    }

    /** @test */
    public function itSucceedWithAnArrayContaining2ValuesThatCanMatch0()
    {
        $magicThree = new MagicThree();

        $this->assertTrue($magicThree->hasValidNumbers([8, 5, -16]));
    }

    /** @test */
    public function testItFailsWithAnArrayContainingValuesThatCannotMatch0()
    {
        $magicThree = new MagicThree();

        $this->assertFalse($magicThree->hasValidNumbers([1, 4, 2, -9]));
    }
}
