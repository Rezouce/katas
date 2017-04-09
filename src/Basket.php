<?php

namespace Kata;

class Basket
{
    /** @var Book[] */
    private $books = [];

    public function add(Book $book)
    {
        $this->books[] = $book;
    }

    public function getPrice()
    {
        $price = 0;

        $bookPricesGroupedByVolumes = $this->getBookPricesGroupedByVolumes();

        for ($i = 0, $count = count(max($bookPricesGroupedByVolumes)); $i < $count; ++$i) {
            $numberDifferentVolumes = count($bookPricesGroupedByVolumes);

            foreach ($bookPricesGroupedByVolumes as $volumeNumber => &$group) {
                $bookPrice = array_shift($group);

                if ($numberDifferentVolumes == 2) {
                    $price+= $bookPrice * 0.95;
                } else {
                    $price+= $bookPrice;
                }

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
