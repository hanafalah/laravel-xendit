<?php

namespace Hanafalah\LaravelXendit\Data;

use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\LaravelXendit\Contracts\Data\XPaymentMethodData as DataXPaymentMethodData;
use Hanafalah\LaravelXendit\Contracts\Data\XWalletData;
use Illuminate\Validation\Rule;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\Validation\RequiredIf;
use Xendit\PaymentMethod\PaymentMethodReusability;
use Xendit\PaymentMethod\PaymentMethodType;

class XPaymentMethodData extends Data implements DataXPaymentMethodData
{
    #[MapInputName('type')]
    #[MapName('type')]
    public ?string $type = null;

    #[MapInputName('ewallet')]
    #[MapName('ewallet')]
    #[RequiredIf("type", "EWALLET")]
    public ?XWalletData $ewallet = null;

    #[MapInputName('reusability')]
    #[MapName('reusability')]
    public ?string $reusability = null;

    #[MapInputName('props')]
    #[MapName('props')]
    public ?XParameterData $props = null;

    public function rules(): array{
        return [
            'type' => ['nullable', Rule::in(PaymentMethodType::getAllowableEnumValues())],
            'reusability' => ['nullable', Rule::in(PaymentMethodReusability::getAllowableEnumValues())],
        ];
    }
}