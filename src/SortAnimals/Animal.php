<?php declare(strict_types=1);

namespace Kata\SortAnimals;

class Animal
{

	private $name;

	private $numberOfLegs;

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	public function getNumberOfLegs()
	{
		return $this->numberOfLegs;
	}

	public function setNumberOfLegs($numberOfLegs)
	{
		$this->numberOfLegs = $numberOfLegs;

		return $this;
	}
}
