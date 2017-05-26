<?php declare(strict_types=1);

namespace Kata\SortAnimals;

class AnimalCollection
{

	private $animals;

	public function __construct($animals)
	{
		$this->animals = collect($animals);
	}

	public function sortByNumberOfLegsAndNames()
	{
		return new static($this->animals->sortBy(function (Animal $animal) {
			return $animal->getNumberOfLegs() . $animal->getName();
		}, SORT_NATURAL)->values());
	}

	public function toArray()
	{
		return $this->animals->toArray();
	}
}
