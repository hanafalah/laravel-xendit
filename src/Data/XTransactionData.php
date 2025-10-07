<?php

namespace Hanafalah\LaravelXendit\Data;

use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\LaravelXendit\Contracts\Data\XPaymentMethodData;
use Hanafalah\LaravelXendit\Contracts\Data\XTransactionData as DataXTransactionData;
use Illuminate\Validation\Rule;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Xendit\PaymentRequest\PaymentRequestCountry;
use Xendit\PaymentRequest\PaymentRequestCurrency;
use Illuminate\Support\Str;
use Spatie\LaravelData\Attributes\Validation\Enum;

class XTransactionData extends Data implements DataXTransactionData
{
    #[MapInputName('idempotency_key')]
    #[MapName('idempotency_key')]
    public ?string $idempotency_key;

    #[MapInputName('with_split_rule')]
    #[MapName('with_split_rule')]
    public ?string $with_split_rule;

    #[MapInputName('type')]
    #[MapName('type')]
    #[Enum('subsquent_payment')]
    public ?string $type = null;

    #[MapInputName('amount')]
    #[MapName('amount')]
    public int $amount;

    #[MapInputName('currency')]
    #[MapName('currency')]
    public ?string $currency = null;

    #[MapInputName('country')]
    #[MapName('country')]
    public ?string $country = null;

    #[MapInputName('reference_id')]
    #[MapName('reference_id')]
    public ?string $reference_id = null;

    #[MapInputName('customer_id')]
    #[MapName('customer_id')]
    public ?string $customer_id = null;

    #[MapInputName('description')]
    #[MapName('description')]
    public ?string $description = null;

    #[MapInputName('payment_method_id')]
    #[MapName('payment_method_id')]
    public ?string $payment_method_id = null;

    #[MapInputName('metadata')]
    #[MapName('metadata')]
    public ?array $metadata = null;

    #[MapInputName('payment_method')]
    #[MapName('payment_method')]
    public ?XPaymentMethodData $payment_method = null;

    #[MapInputName('props')]
    #[MapName('props')]
    public ?XParameterData $props = null;

    public static function before(array &$attributes){
        $attributes['idempotency_key'] ??= Str::orderedUuid();
        $attributes['reference_id'] ??= Str::orderedUuid();
    }

    public function rules(): array{
        return [
            'currency' => ['required', Rule::in(PaymentRequestCurrency::getAllowableEnumValues())],
            'country' => ['nullable', Rule::in(PaymentRequestCountry::getAllowableEnumValues())],
        ];
    }
}