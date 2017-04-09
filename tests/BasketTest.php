<?php

namespace Test\Kata;

use Kata\Basket;
use Kata\Book;
use PHPUnit\Framework\TestCase;

class BasketTest extends TestCase
{

    /** @test */
    public function it_has_a_price_based_on_the_books_it_contains()
    {
        $basket = new Basket;
        $basket->add(new Book);
        $basket->add(new Book);

        $this->assertEquals(8 * 2, $basket->getPrice());
    }
}
