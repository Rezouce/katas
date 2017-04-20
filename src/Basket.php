<?php

namespace Kata;

class Basket
{
    /** @var Book[] */
    private $books = [];

    private $discountMultipliers = [
        1 => 1,
        2 => 0.95,
        3 => 0.9,
        4 => 0.8,
        5 => 0.75,
    ];

    public function add(Book $book)
    {
        $this->books[] = $book;
    }

    public function getPrice()
    {
        $price = 0;

        $bookPricesGroupedByVolumes = $this->getBookPricesGroupedByVolumes();

        // For each line, compute all discounts possible and at the end compare the result.

        for ($i = 0, $count = count(max($bookPricesGroupedByVolumes)); $i < $count; ++$i) {
            $numberDifferentVolumes = count($bookPricesGroupedByVolumes);

            foreach ($bookPricesGroupedByVolumes as $volumeNumber => &$group) {
                $bookPrice = array_shift($group);

                $price += $bookPrice * $this->discountMultipliers[$numberDifferentVolumes];

                if (empty($group)) {
                    unset($bookPricesGroupedByVolumes[$volumeNumber]);
                }
            }
        }

        return $price;
    }

    private function getBookPricesGroupedByVolumes()
    {
        $groups = [];

        foreach ($this->books as $book) {
            $groups[$book->getVolumeNumber()][] = $book->getPrice();
        }

        return $groups;
    }
}
