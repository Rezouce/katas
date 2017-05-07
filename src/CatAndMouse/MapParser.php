<?php

namespace Kata\CatAndMouse;

class MapParser
{

    private $mapLength;
    private $catPosition;
    private $mousePosition;

    public function __construct(string $map)
    {
        $this->mapLength = strpos($map, "\n") ?: strlen($map);

        $map = str_replace("\n", '', $map);

        $this->catPosition = strpos($map, 'C');
        $this->mousePosition = strpos($map, 'm');

        if (false === $this->catPosition) {
            throw new \LogicException('There is no cat on the map.');
        }

        if (false === $this->mousePosition) {
            throw new \LogicException('There is no mouse on the map.');
        }
    }

    public function getMapLength(): int
    {
        return $this->mapLength;
    }

    public function getCatPosition(): int
    {
        return $this->catPosition;
    }

    public function getMousePosition(): int
    {
        return $this->mousePosition;
    }
}
