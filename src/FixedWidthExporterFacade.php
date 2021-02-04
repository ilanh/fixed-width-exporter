<?php

namespace Ilanh\FixedWidthExporter;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ilanh\FixedWidthExporter\Skeleton\SkeletonClass
 */
class FixedWidthExporterFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'fixed-width-exporter';
    }
}
