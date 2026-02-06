<?php

declare(strict_types=1);

namespace Tests;

use ApprovalTests\Approvals;
use GildedRose\GildedRose;
use GildedRose\Item;
use PHPUnit\Framework\TestCase;

final class ApprovalTest extends TestCase
{
    private int $previousErrorReporting;

    protected function setUp(): void
    {
        parent::setUp();

        // Suppress deprecation notices from ApprovalTests on PHP 8.2+
        $this->previousErrorReporting = error_reporting();
        error_reporting(E_ALL & ~E_DEPRECATED);
    }

    protected function tearDown(): void
    {
        // Restore original error reporting
        error_reporting($this->previousErrorReporting);

        parent::tearDown();
    }

    public function testFoo(): void
    {
        $items = [new Item('foo', 0, 0)];
        $app = new GildedRose($items);
        $app->updateQuality();

        Approvals::verifyList($items);
    }

    public function testThirtyDays(): void
    {
        ob_start();

        $argv = ['', '30'];
        include __DIR__ . '/../fixtures/texttest_fixture.php';

        $output = ob_get_clean();

        Approvals::verifyString($output);
    }
}
