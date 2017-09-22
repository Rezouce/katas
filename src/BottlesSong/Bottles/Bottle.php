<?php declare(strict_types=1);

namespace Kata\BottlesSong\Bottles;

class Bottle
{
	private $numberBottles;

	public function __construct(int $numberBottles)
	{
		$this->numberBottles = $numberBottles;
	}

	public function getAction()
	{
		return 'Take one down and pass it around';
	}

	public function currentBottlesNumber()
	{
		return $this->numberBottles . ' bottles';
	}

	public function leftBottlesNumber()
	{
		return ($this->numberBottles - 1) . ' bottles';
	}
}
