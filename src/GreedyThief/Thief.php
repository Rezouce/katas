<?php declare(strict_types=1);

namespace Kata\GreedyThief;

class Thief
{

    public function stealFrom(array $items, int $maxWeight)
    {
        $itemValues = array_map(function ($item) {
            return $item['price'] / $item['weight'];
        }, $items);

        arsort($itemValues);

        $stolenItems = [];

        foreach (array_keys($itemValues) as $id)
        {
            if ($items[$id]['weight'] > $maxWeight)
            {
                break;
            }

            $stolenItems[] = $items[$id];
            $maxWeight -= $items[$id]['weight'];
        }

        return $stolenItems;
    }
}
