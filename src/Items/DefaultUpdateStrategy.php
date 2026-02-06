<?php

namespace GildedRose\Items;

use GildedRose\Contract\GildedRoseUpdateInterface;
use GildedRose\Item;

class DefaultUpdateStrategy implements GildedRoseUpdateInterface
{
    public function update(Item $item)
    {
        $item->sellIn--;

        if ($item->sellIn >= 0) {
            $item->quality--;
        } else {
            $item->quality -= 2;
        }

        if ($item->quality < 0) {
            $item->quality = 0;
        }

        if ($item->quality > 50) {
            $item->quality = 50;
        }
    }
}
