<?php

namespace GildedRose\Items;

use GildedRose\Contract\GildedRoseUpdateInterface;
use GildedRose\Item;

class AgedBrieUpdateStrategy implements GildedRoseUpdateInterface
{
    public function update(Item $item)
    {
        if ($item->quality < 50) {
            $item->quality++;
        }

        $item->sellIn--;

        if ($item->sellIn < 0 && $item->quality < 50) {
            $item->quality++;
        }
    }
}
