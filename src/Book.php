<?php

namespace Kata;

class Book
{

    private $price = 8;

    private $volumeNumber;

    public function __construct($volumeNumber = 1)
    {
        $this->volumeNumber = $volumeNumber;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getVolumeNumber()
    {
        return $this->volumeNumber;
    }
}
