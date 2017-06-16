<?php declare(strict_types=1);

namespace Test\Kata\DataMunging;

use Kata\DataMunging\Football;
use PHPUnit\Framework\TestCase;

class FootballTest extends TestCase
{

    private $data = '       Team            P     W    L   D    F      A     Pts
    1. Arsenal         38    26   9   3    79  -  36    87
    2. Liverpool       38    24   8   6    67  -  30    80
    3. Manchester_U    38    24   5   9    87  -  45    77
    4. Newcastle       38    21   8   9    74  -  52    71

';

    /** @test */
    public function it_returns_the_minimum_temperature_for_each_day()
    {
        $football = new Football($this->data);

        $this->assertEquals(
            ['team' => 'Newcastle', 'difference' => 22],
            $football->getTeamWithSmallestForAndAgainstDifference()
        );
    }
}
