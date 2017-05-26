<?php declare(strict_types=1);

namespace Test\Kata\SortAnimal;

use Kata\SortAnimals\Animal;
use PHPUnit\Framework\TestCase;

class AnimalTest extends TestCase
{

	/** @test */
	public function it_has_legs()
	{
		$animal = new Animal;

		$animal->setNumberOfLegs(5);

		$this->assertEquals(5, $animal->getNumberOfLegs());
	}

	/** @test */
	public function it_has_a_name()
	{
		$animal = new Animal;

		$animal->setName('Potatoe');

		$this->assertEquals('Potatoe', $animal->getName());
	}
}
