<?php

namespace Ilanh\FixedWidthExporter\Tests;

use Orchestra\Testbench\TestCase;
use Ilanh\FixedWidthExporter\FixedWidthExporterServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app): array
    {
        return [FixedWidthExporterServiceProvider::class];
    }

    /** @test
    @covers true_is_true
     */
    public function true_is_true(): void
    {
        self::assertTrue(true);
    }
}
