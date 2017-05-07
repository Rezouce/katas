<?php

namespace Kata\CatAndMouse;

class Catcher
{

	private $allowedNumberMoves = 0;

	public function forNumberMove(int $numberMoves): self
	{
		$this->allowedNumberMoves = $numberMoves;

		return $this;
	}

	public function canCatchInMap(string $map)
	{
		$parser = new MapParser($map);

        $distance = abs($parser->getCatPosition() - $parser->getMousePosition());
		$numberMovesToDo = floor($distance / $parser->getMapLength()) + $distance % $parser->getMapLength();

		return $this->allowedNumberMoves >= $numberMovesToDo;
	}
}
