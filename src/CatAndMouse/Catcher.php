<?php

namespace Kata\CatAndMouse;

class Catcher
{

	private $allowedNumberMove = 0;

	public function forNumberMove(int $numberMove): self
	{
		$this->allowedNumberMove = $numberMove;

		return $this;
	}

	public function canCatchInMap(string $map)
	{
		$parser = new MapParser($map);

		$numberMovesDone = 0;

		$moves = 0;
		$differencePosition = abs($parser->getCatPosition() - $parser->getMousePosition());

		do {
			++$numberMovesDone;

			if ($differencePosition - $moves > $parser->getMapLength()) {
				$moves += $parser->getMapLength();
			} else {
				++$moves;
			}
		} while(0 != $differencePosition - $moves);

		return $numberMovesDone <= $this->allowedNumberMove;
	}
}
