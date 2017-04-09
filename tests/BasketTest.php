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

    /** @test */
    public function when_having_books_of_2_different_volumes_each_combination_is_discounted_by_5_percent()
    {
        $basket = new Basket;
        $basket->add(new Book(2));
        $basket->add(new Book(4));
        $basket->add(new Book(2));

        $this->assertEquals(8 + 8 * 2 * 0.95, $basket->getPrice());
    }
}
