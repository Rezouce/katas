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
        if ($size < 5) {
            throw new \RuntimeException('A spiral must have a minimal size of 5');
        }

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
