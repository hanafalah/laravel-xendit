<?php

namespace Hanafalah\LaravelXendit\Facades;

use Illuminate\Support\Facades\Facade;
use Hanafalah\LaravelXendit\Contracts\LaravelXendit as ContractsXendit;


/**
 * @method static self impersonate(Tenant|string|int $tenant)
 */
class LaravelXendit extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ContractsXendit::class;
    }
}
