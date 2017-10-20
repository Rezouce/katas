<?php declare(strict_types=1);

namespace Test\Kata\GreedyThief;

use Kata\GreedyThief\Thief;
use PHPUnit\Framework\TestCase;

class ThiefTest extends TestCase
{
    /** @test */
    public function itGetTheMostValuableItemsItCan()
    {
        $availableItems = [
            ['weight' => 2, 'price' => 6],
            ['weight' => 2, 'price' => 3],
            ['weight' => 6, 'price' => 5],
            ['weight' => 5, 'price' => 4],
            ['weight' => 4, 'price' => 6],
        ];

        $expectedStolenItems = [
            ['weight' => 2, 'price' => 6],
            ['weight' => 2, 'price' => 3],
            ['weight' => 4, 'price' => 6],
        ];

        $thief = new Thief();

        $this->assertEquals($expectedStolenItems, $thief->stealFrom($availableItems, 10));
    }
}
