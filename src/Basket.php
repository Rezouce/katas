<?php

namespace Kata;

class Basket
{

    private $books = [];

    public function add(Book $book)
    {
        $this->books[] = $book;
    }

    public function getPrice()
    {
        $numberDifferentVolumes = count(array_count_values(array_map(function(Book $book) {
            return $book->getVolumeNumber();
        }, $this->books)));

        $price = array_reduce($this->books, function($price, Book $book) {
            return $price + $book->getPrice();
        }, 0);

        if ($numberDifferentVolumes == 2) {
            $price *= 0.95;
        }

        return $price;
    }
}
