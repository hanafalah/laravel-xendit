<?php

namespace Hanafalah\LaravelXendit\Data;

use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\LaravelXendit\Contracts\Data\XChannelPropertyData as DataXChannelPropertyData;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;

class XChannelPropertyData extends Data implements DataXChannelPropertyData
{
    #[MapInputName('success_return_url')]
    #[MapName('success_return_url')]
    public ?string $success_return_url = null;

    #[MapInputName('failure_return_url')]
    #[MapName('failure_return_url')]
    public ?string $failure_return_url = null;
}