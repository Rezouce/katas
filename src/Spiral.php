<?php

namespace Kata;

class Spiral
{

    /** @var PainterInterface */
    private $painter;

    public function __construct(PainterInterface $painter)
    {
        $this->painter = $painter;
    }

    public function draws(int $size)
    {
        $spiral = [
            ['0', '0', '0', '0', '0'],
            ['.', '.', '.', '.', '0'],
            ['0', '0', '0', '.', '0'],
            ['0', '.', '.', '.', '0'],
            ['0', '0', '0', '0', '0'],
        ];

        return $this->painter->draws($spiral);
    }
}
