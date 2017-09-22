<?php declare(strict_types=1);

namespace Kata\BottlesSong\Bottles;

class BottleNumber1
{
	public function getAction()
	{
		return 'Take one down and pass it around';
	}

	public function currentBottlesNumber()
	{
		return '1 bottle';
	}

	public function leftBottlesNumber()
	{
		return 'no more bottles';
	}
}
