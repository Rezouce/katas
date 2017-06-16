<?php declare(strict_types=1);

namespace Test\Kata\DataMunging;

use Kata\DataMunging\Weather;
use PHPUnit\Framework\TestCase;

class WeatherTest extends TestCase
{

	private $data = '  Dy MxT   MnT   AvT   HDDay  AvDP 1HrP TPcpn WxType PDir AvSp Dir MxS SkyC MxR MnR AvSLP

   1  88    59    74          53.8       0.00 F       280  9.6 270  17  1.6  93 23 1004.5
   2  79    63    71          46.5       0.00         330  8.7 340  23  3.3  70 28 1004.5
   3  77    55    66          39.6       0.00         350  5.0 350   9  2.8  59 24 1016.8
   4  77    59    68          51.1       0.00         110  9.1 130  12  8.6  62 40 1021.1

';

	/** @test */
	public function it_returns_the_minimum_temperature_for_each_day()
	{
		$weather = new Weather($this->data);

		$this->assertEquals([
			['day' => 1, 'temperature' => 59],
			['day' => 2, 'temperature' => 63],
			['day' => 3, 'temperature' => 55],
			['day' => 4, 'temperature' => 59],
		], $weather->getMinimumTemperatureForEachDay());
	}
}
