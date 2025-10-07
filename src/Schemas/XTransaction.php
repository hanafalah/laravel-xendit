<?php

namespace Hanafalah\LaravelXendit\Schemas;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Hanafalah\LaravelXendit\{
    Supports\BaseLaravelXendit
};
use Hanafalah\LaravelXendit\Contracts\Schemas\XTransaction as ContractsXTransaction;
use Hanafalah\LaravelXendit\Contracts\Data\XTransactionData;
use Xendit\PaymentRequest\PaymentRequestApi;

class XTransaction extends BaseLaravelXendit implements ContractsXTransaction
{
    protected string $__entity = 'XTransaction';
    public $x_transaction_model;
    protected $__current_class = PaymentRequestApi::class;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'x_transaction',
            'tags'     => ['x_transaction', 'x_transaction-index'],
            'duration' => 24 * 60
        ]
    ];

    public function prepareStoreXTransaction(XTransactionData $x_transaction_dto): Model{
        switch ($x_transaction_dto->type) {
            case 'one_time_payment':
            case 'subsquent_payment':
                $payment_request_parameters = [
                    'reference_id' => $x_transaction_dto->reference_id,
                    'amount' => $x_transaction_dto->amount,
                    'currency' => $x_transaction_dto->currency,
                    'country' => $x_transaction_dto->country,
                    'payment_method' => $x_transaction_dto->payment_method
                ];
            break;
        }
        $parameter = $x_transaction_dto->props;
        $data = $this->getCurrentClass()
            ->createPaymentRequest(
                $x_transaction_dto->idempotency_key, 
                $parameter->for_user_id, 
                $x_transaction_dto->with_split_rule, 
                $payment_request_parameters, 
                'application/json'
            );
        $logs_xendit = $this->XTransactionModel()->create();
        $logs_xendit->data = json_decode($data,true);
        $logs_xendit->save();
        return $logs_xendit;
    }
}