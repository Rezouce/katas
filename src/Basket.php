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
        return array_reduce($this->books, function($price, Book $book) {
            return $price + $book->getPrice();
        }, 0);
    }
}
