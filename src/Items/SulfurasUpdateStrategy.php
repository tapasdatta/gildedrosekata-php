<?php

namespace GildedRose\Items;

use GildedRose\Contract\GildedRoseUpdateInterface;
use GildedRose\Item;

class SulfurasUpdateStrategy implements GildedRoseUpdateInterface
{
    public function update(Item $item)
    {
        // No changes to Quality or SellIn, as Sulfuras is a legendary item.
    }
}
