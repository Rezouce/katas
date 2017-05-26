<?php declare(strict_types=1);

namespace Test\Kata\SortAnimal;

use Kata\SortAnimals\Animal;
use Kata\SortAnimals\AnimalCollection;
use PHPUnit\Framework\TestCase;

class AnimalCollectionTest extends TestCase
{

	/** @test */
	public function it_can_return_the_animals_as_an_array()
	{
		$animal1 = new Animal;
		$animal2 = new Animal;
		$animal3 = new Animal;

		$collection = new AnimalCollection([$animal1, $animal2, $animal3]);

		$this->assertEquals([$animal1, $animal2, $animal3], $collection->toArray());
	}

	/** @test */
	public function it_can_sort_animals_by_their_number_of_legs()
	{
		$animal1 = (new Animal)->setNumberOfLegs(3);
		$animal2 = (new Animal)->setNumberOfLegs(5);
		$animal3 = (new Animal)->setNumberOfLegs(2);

		$collection = new AnimalCollection([$animal1, $animal2, $animal3]);

		$this->assertEquals([$animal3, $animal1, $animal2], $collection->sortByNumberOfLegsAndNames()->toArray());
	}

	/** @test */
	public function it_can_sort_animals_by_their_names()
	{
		$animal1 = (new Animal)->setName('Animal');
		$animal2 = (new Animal)->setName('Znimal');
		$animal3 = (new Animal)->setName('Ynimal');

		$collection = new AnimalCollection([$animal1, $animal2, $animal3]);

		$this->assertEquals([$animal1, $animal3, $animal2], $collection->sortByNumberOfLegsAndNames()->toArray());
	}

	/** @test */
	public function it_can_sort_animals_by_their_legs_then_by_their_names()
	{
		$animal1 = (new Animal)->setNumberOfLegs(3)->setName('Animal');
		$animal2 = (new Animal)->setNumberOfLegs(3)->setName('Znimal');
		$animal3 = (new Animal)->setNumberOfLegs(2)->setName('Ynimal');

		$collection = new AnimalCollection([$animal1, $animal2, $animal3]);

		$this->assertEquals([$animal3, $animal1, $animal2], $collection->sortByNumberOfLegsAndNames()->toArray());
	}

	/** @test */
	public function the_sort_use_the_natural_order()
	{
		$animal1 = (new Animal)->setNumberOfLegs(20)->setName('Animal');
		$animal2 = (new Animal)->setNumberOfLegs(2)->setName('Znimal');
		$animal3 = (new Animal)->setNumberOfLegs(2)->setName('Ynimal');

		$collection = new AnimalCollection([$animal1, $animal2, $animal3]);

		$this->assertEquals([$animal3, $animal2, $animal1], $collection->sortByNumberOfLegsAndNames()->toArray());
	}
}
