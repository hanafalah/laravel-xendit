<?php

namespace Hanafalah\LaravelXendit\Schemas;

use Hanafalah\LaravelXendit\{
    Supports\BaseLaravelXendit
};
use Hanafalah\LaravelXendit\Contracts\Data\XPaymentMethodData;
use Hanafalah\LaravelXendit\Contracts\Schemas\XPaymentMethod as ContractsXPaymentMethod;
use Xendit\PaymentMethod\PaymentMethodApi;

class XPaymentMethod extends BaseLaravelXendit implements ContractsXPaymentMethod
{
    protected string $__entity = 'XPaymentMethod';
    public $x_payment_method_model;
    protected $__current_class = PaymentMethodApi::class;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'x_payment_method',
            'tags'     => ['x_payment_method', 'x_payment_method-index'],
            'duration' => 24 * 60
        ]
    ];

    public function prepareViewXPaymentMethodList(XPaymentMethodData $x_payment_method_dto){
        $param = $x_payment_method_dto->props;
        $data = $this->getCurrentClass()
            ->getAllPaymentMethods(
                $param->for_user_id, 
                $param->id, 
                $param->type, 
                $param->status, 
                $param->reusability, 
                $param->customer_id, 
                $param->reference_id, 
                $param->after_id, 
                $param->before_id, 
                $param->limit, 
                'application/json'
            );
        return collect(json_decode($data)->data);
    }
}