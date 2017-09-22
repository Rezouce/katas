<?php declare(strict_types=1);

namespace Kata\BottlesSong\Bottles;

class BottleNumber0
{
	public function getAction()
	{
		return 'Go to the store and buy some more';
	}

	public function currentBottlesNumber()
	{
		return 'no more bottles';
	}

	public function leftBottlesNumber()
	{
		return '99 bottles';
	}
}
