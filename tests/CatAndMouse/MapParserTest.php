<?php

namespace Test\Kata\CatAndMouse;

use Kata\CatAndMouse\MapParser;
use PHPUnit\Framework\TestCase;

class MapParserTest extends TestCase
{

	/** @test */
	public function it_can_parse_a_map()
	{
		$map = '..C......' . "\n"
			 . '.........' . "\n"
			 . '....m....' . "\n";

		$parser = new MapParser($map);

		$this->assertEquals(9, $parser->getMapLength());
		// Start to count at 0.
		$this->assertEquals(2, $parser->getCatPosition());
		// Third line start at 9 + 9.
		$this->assertEquals(9 + 9 + 4, $parser->getMousePosition());
	}

	/** @test */
	public function throws_an_error_if_the_cat_is_missing()
	{
		$map = '.........' . "\n"
			 . '.........' . "\n"
			 . '....m....' . "\n";

		$this->expectException(\LogicException::class);
		$this->expectExceptionMessage('There is no cat on the map.');

		new MapParser($map);
	}

	/** @test */
	public function throws_an_error_if_the_mouse_is_missing()
	{
		$map = '..C......' . "\n"
			 . '.........' . "\n"
			 . '.........' . "\n";

		$this->expectException(\LogicException::class);
		$this->expectExceptionMessage('There is no mouse on the map.');

		new MapParser($map);
	}

	/** @test */
	public function it_also_works_with_single_line_maps()
	{
		$map = '..C..m';

		$parser = new MapParser($map);

		$this->assertEquals(6, $parser->getMapLength());
	}
}
