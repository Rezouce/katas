<?php declare(strict_types=1);

namespace Kata\BottlesSong\Bottles;

class BottleNumber2
{
	public function getAction()
	{
		return 'Take one down and pass it around';
	}

	public function currentBottlesNumber()
	{
		return '2 bottles';
	}

	public function leftBottlesNumber()
	{
		return '1 bottle';
	}
}
