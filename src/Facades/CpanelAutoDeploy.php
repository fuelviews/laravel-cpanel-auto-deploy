<?php

namespace Fuelviews\CpanelAutoDeploy\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fuelviews\CpanelAutoDeploy\CpanelAutoDeploy
 */
class CpanelAutoDeploy extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Fuelviews\CpanelAutoDeploy\CpanelAutoDeploy::class;
    }
}
