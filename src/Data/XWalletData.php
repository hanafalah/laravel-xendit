<?php

namespace Hanafalah\LaravelXendit\Data;

use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\LaravelXendit\Contracts\Data\XChannelPropertyData;
use Hanafalah\LaravelXendit\Contracts\Data\XWalletData as DataXWalletData;
use Illuminate\Validation\Rule;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Xendit\PaymentMethod\EWalletChannelCode;

class XWalletData extends Data implements DataXWalletData
{
    #[MapInputName('channel_code')]
    #[MapName('channel_code')]
    public string $channel_code;

    #[MapInputName('channel_properties')]
    #[MapName('channel_properties')]
    public ?XChannelPropertyData $channel_properties = null;

    #[MapInputName('props')]
    #[MapName('props')]
    public ?array $props = null;

    public function rules(): array{
        return [
            'channel_code' => ['required', Rule::in(EWalletChannelCode::getAllowableEnumValues())],
        ];
    }
}