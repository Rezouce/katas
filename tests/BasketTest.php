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
    public function two_books_with_different_volume_numbers_have_a_5_percent_discounts()
    {
        $basket = new Basket;
        $basket->add(new Book(2));
        $basket->add(new Book(4));

        $this->assertEquals(8 * 2 * 0.95, $basket->getPrice());
    }

    /** @test */
    public function three_books_with_2_different_have_only_the_different_discounted()
    {
        $basket = new Basket;
        $basket->add(new Book(2));
        $basket->add(new Book(4));
        $basket->add(new Book(2));

        $this->assertEquals(8 + 8 * 2 * 0.95, $basket->getPrice());
    }
}
