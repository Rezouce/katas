<?php

namespace Test\Kata;

use Kata\Book;
use PHPUnit\Framework\TestCase;

class BookTest extends TestCase
{

    /** @test */
    public function it_has_a_price()
    {
        $book = new Book;

        $this->assertEquals(8, $book->getPrice());
    }
}
