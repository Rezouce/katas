<?php

namespace Kata;

class Spiral
{
    private const LEFT = 'left';
    private const RIGHT = 'right';
    private const TOP = 'top';
    private const BOTTOM = 'bottom';

    private const NEXT_DIRECTIONS = [
        self::LEFT => self::TOP,
        self::BOTTOM => self::LEFT,
        self::RIGHT => self::BOTTOM,
        self::TOP => self::RIGHT,
    ];

    private $painter;

    private $spiralRepresentation = [];

    private $currentX;
    private $currentY;

    private $direction;

    public function __construct(PainterInterface $painter)
    {
        $this->painter = $painter;
    }

    public function draws(int $size)
    {
        if ($size < 5) {
            throw new \RuntimeException('A spiral must have a minimal size of 5');
        }

        $this->createEmptyRepresentation($size);

        $this->initializeCoordinates($size);
        $this->initializeDirection();

        $this->addLine($size);

        for ($i = 0; $i < $size - 1; ++$i) {
            $lineSize = $size - 1 - $i + $i % 2;

            $this->addLine($lineSize);
        }

        return $this->painter->draws($this->spiralRepresentation);
    }

    private function createEmptyRepresentation(int $size)
    {
        $minimumCoordinate = 0 - floor($size / 2);
        $maximumCoordinate = $size - ceil($size / 2);

        for ($i = $minimumCoordinate; $i < $maximumCoordinate; ++$i) {
            for ($j = $minimumCoordinate; $j < $maximumCoordinate; ++$j) {
                $this->spiralRepresentation[$i][$j] = '.';
            }
        }
    }

    private function initializeCoordinates($size)
    {
        $this->currentX = -1 - floor($size / 2);
        $this->currentY = 0 - floor($size / 2);
    }

    private function initializeDirection()
    {
        $this->direction = static::RIGHT;
    }

    private function addLine(int $size)
    {
        [$xMultiplier, $yMultiplier] = $this->getCoordinatesMultipliers();

        for ($i = 0; $i < $size; ++$i) {
            $this->currentX += $xMultiplier;
            $this->currentY += $yMultiplier;

            $this->spiralRepresentation[$this->currentY][$this->currentX] = '0';
        }

        $this->changeLineDirection();
    }

    private function changeLineDirection()
    {
        $this->direction = static::NEXT_DIRECTIONS[$this->direction];
    }

    private function getCoordinatesMultipliers(): array
    {
        switch ($this->direction) {
            case static::LEFT:
                return [-1, 0];
            case static::RIGHT:
                return [1, 0];
            case static::TOP:
                return [0, -1];
            case static::BOTTOM:
            default:
                return [0, 1];
        }
    }
}
