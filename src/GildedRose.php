<?php

declare(strict_types=1);

namespace GildedRose;

use GildedRose\Items\AgedBrieUpdateStrategy;
use GildedRose\Items\BackstagePassUpdateStrategy;
use GildedRose\Items\ConjuredUpdateStrategy;
use GildedRose\Items\DefaultUpdateStrategy;
use GildedRose\Items\SulfurasUpdateStrategy;

final class GildedRose
{
    private array $strategies;

    /**
     * @param Item[] $items
     */
    public function __construct(
        private array $items
    ) {
        $strategies = [
            'Aged Brie' => new AgedBrieUpdateStrategy(),
            'Backstage passes to a TAFKAL80ETC concert' => new BackstagePassUpdateStrategy(),
            'Sulfuras, Hand of Ragnaros' => new SulfurasUpdateStrategy(),
            'Conjured Mana Cake' => new ConjuredUpdateStrategy(),
            'default' => new DefaultUpdateStrategy(),
        ];

        $this->strategies = array_merge($strategies, []);
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            $strategy = $this->strategies[$item->name] ?? $this->strategies['default'];

            $strategy->update($item);
        }
    }
}
