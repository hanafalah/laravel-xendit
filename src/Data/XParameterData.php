<?php

namespace Hanafalah\LaravelXendit\Data;

use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\LaravelXendit\Contracts\Data\XParameterData as DataXParameterData;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;

class XParameterData extends Data implements DataXParameterData
{
    #[MapInputName('for_user_id')]
    #[MapName('for_user_id')]
    public ?string $for_user_id = null;

    #[MapInputName('id')]
    #[MapName('id')]
    public ?string $id = null;

    #[MapInputName('type')]
    #[MapName('type')]
    public ?string $type = null;

    #[MapInputName('status')]
    #[MapName('status')]
    public ?string $status = null;

    #[MapInputName('reusability')]
    #[MapName('reusability')]
    public ?string $reusability = null;

    #[MapInputName('customer_id')]
    #[MapName('customer_id')]
    public ?string $customer_id = null;

    #[MapInputName('reference_id')]
    #[MapName('reference_id')]
    public ?string $reference_id = null;

    #[MapInputName('after_id')]
    #[MapName('after_id')]
    public ?string $after_id = null;

    #[MapInputName('before_id')]
    #[MapName('before_id')]
    public ?string $before_id = null;

    #[MapInputName('limit')]
    #[MapName('limit')]
    public ?string $limit = null;
}