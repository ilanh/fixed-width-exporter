<?php

namespace Ilanh\FixedWidthExporter\Tests;

use Orchestra\Testbench\TestCase;
use Ilanh\FixedWidthExporter\FixedWidthExporterServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [FixedWidthExporterServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
