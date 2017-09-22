<?php declare(strict_types=1);

namespace Kata\BottlesSong;

use Kata\BottlesSong\Bottles\Bottle;

class BottlesSong
{

    public function sing($startingNumberBottles = 99)
    {
        $song = [];

        for ($i = $startingNumberBottles; $i >= 0; --$i) {
            $song = array_merge($song, $this->newVerse($i));
        }

        return $song;
    }

    private function newVerse($numberBottles)
    {
        $bottle = $this->bottle($numberBottles);

        return [
            sprintf('%s of beer on the wall, %s of beer.', ucfirst($bottle->currentBottlesNumber()), $bottle->currentBottlesNumber()),
            sprintf('%s, %s of beer on the wall.', $bottle->getAction(), $bottle->leftBottlesNumber()),
        ];
    }

    private function bottle($numberBottles): Bottle
    {
        $bottleClassName = '\Kata\BottlesSong\Bottles\BottleNumber' . $numberBottles;

        if (!class_exists($bottleClassName)) {
            $bottleClassName = Bottle::class;
        }

        return new $bottleClassName($numberBottles);
    }
}
