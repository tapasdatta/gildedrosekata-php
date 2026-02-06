<?php

namespace GildedRose\Items;

use GildedRose\Contract\GildedRoseUpdateInterface;
use GildedRose\Item;

class BackstagePassUpdateStrategy implements GildedRoseUpdateInterface
{
    public function update(Item $item)
    {
        if ($item->sellIn > 0) {
            $item->quality++;

            if ($item->sellIn <= 10 && $item->quality < 50) {
                $item->quality++;
            }

            if ($item->sellIn <= 5 && $item->quality < 50) {
                $item->quality++;
            }
        } else {
            $item->quality = 0;
        }

        $item->sellIn--;

        if ($item->quality > 50) {
            $item->quality = 50;
        }
    }
}
