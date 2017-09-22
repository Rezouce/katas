<?php declare(strict_types=1);

namespace Kata\BottlesSong;

class BottlesSong
{

    public function sing($startingNumberBottles = 99)
    {
        $song = [];

        for ($i = $startingNumberBottles; $i > 2; --$i) {
            $song = array_merge($song, $this->linesForN($i));
        }

        $song = array_merge($song, $this->linesFor2());
        $song = array_merge($song, $this->linesFor1());
        $song = array_merge($song, $this->lastLines());

        return $song;
    }

    private function linesForN($numberBottles)
    {
        $numberBottlesLeft = $numberBottles - 1;

        return [
            "$numberBottles bottles of beer on the wall, $numberBottles bottles of beer.",
            "Take one down and pass it around, $numberBottlesLeft bottles of beer on the wall.",
        ];
    }

    private function linesFor2()
    {
        return [
            "2 bottles of beer on the wall, 2 bottles of beer.",
            "Take one down and pass it around, 1 bottle of beer on the wall.",
        ];
    }

    private function linesFor1()
    {
        return [
            "1 bottle of beer on the wall, 1 bottle of beer.",
            "Take one down and pass it around, no more bottles of beer on the wall.",
        ];
    }

    private function lastLines()
    {
        return [
            "No more bottles of beer on the wall, no more bottles of beer.",
            "Go to the store and buy some more, 99 bottles of beer on the wall.",
        ];
    }
}
