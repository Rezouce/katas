<?php

namespace Kata;

class StringPainter implements PainterInterface
{

    public function draws(array $arrayToDraw)
    {
        $lines = [];

        foreach ($arrayToDraw as $line) {
            $lines[] = implode('', $line);
        }

        return implode("\n", $lines);
    }
}
