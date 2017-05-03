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

    private $grid = [];

    private $currentX;
    private $currentY;

    private $direction;

    public function __construct(PainterInterface $painter)
    {
        $this->painter = $painter;
    }

    public function draws(int $numberSides)
    {
        if ($numberSides < 5) {
            throw new \RuntimeException('A spiral must have a minimal of 5 sides.');
        }

        $this->initializeCoordinates();
        $this->initializeDirection();

        $this->createEmptyGrid($numberSides);

        for ($sideNumber = 1; $sideNumber <= $numberSides; ++$sideNumber) {
            $this->addSideToGrid($this->getSideSize($numberSides, $sideNumber));
        }

        return $this->painter->draws($this->grid);
    }

    private function createEmptyGrid(int $size)
    {
        for ($i = 0; $i < $size; ++$i) {
            for ($j = 0; $j < $size; ++$j) {
                $this->grid[$i][$j] = '.';
            }
        }
    }

    private function initializeCoordinates()
    {
        $this->currentX = -1;
        $this->currentY = 0;
    }

    private function initializeDirection()
    {
        $this->direction = static::RIGHT;
    }

    private function addSideToGrid(int $size)
    {
        [$xMultiplier, $yMultiplier] = $this->getCoordinatesMultipliers();

        for ($i = 0; $i < $size; ++$i) {
            $this->currentX += $xMultiplier;
            $this->currentY += $yMultiplier;

            $this->grid[$this->currentY][$this->currentX] = '0';
        }

        $this->changeLineDirection();
    }

    private function getSideSize(int $numberSides, int $sideNumber): int
    {
        return $sideNumber === 1
            ? $numberSides
            : 1 + $numberSides - $sideNumber + $sideNumber % 2;
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
