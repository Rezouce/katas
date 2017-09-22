<?php declare(strict_types=1);

namespace Test\Kata\BottlesSong;

use Kata\BottlesSong\BottlesSong;
use PHPUnit\Framework\TestCase;

class BottlesSongTest extends TestCase
{
	/** @test */
	public function itReturnsTheSongInAnArray()
	{
		$bottlesSong = new BottlesSong();

		$this->assertEquals($this->song(), $bottlesSong->sing(5));
	}

	private function song()
	{
		return [
			'5 bottles of beer on the wall, 5 bottles of beer.',
			'Take one down and pass it around, 4 bottles of beer on the wall.',
			'4 bottles of beer on the wall, 4 bottles of beer.',
			'Take one down and pass it around, 3 bottles of beer on the wall.',
			'3 bottles of beer on the wall, 3 bottles of beer.',
			'Take one down and pass it around, 2 bottles of beer on the wall.',
			'2 bottles of beer on the wall, 2 bottles of beer.',
			'Take one down and pass it around, 1 bottle of beer on the wall.',
			'1 bottle of beer on the wall, 1 bottle of beer.',
			'Take one down and pass it around, no more bottles of beer on the wall.',
			'No more bottles of beer on the wall, no more bottles of beer.',
			'Go to the store and buy some more, 99 bottles of beer on the wall.'
		];
	}
}
