<?php

namespace Hanafalah\LaravelXendit;

use Hanafalah\LaravelXendit\Contracts\LaravelXendit as ContractsLaravelXendit;
use Hanafalah\LaravelSupport\Supports\PackageManagement;

class LaravelXendit extends PackageManagement implements ContractsLaravelXendit
{
    protected $__app;
    public static $is_show_model = false;
}
