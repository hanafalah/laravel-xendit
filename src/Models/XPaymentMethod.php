<?php

namespace Hanafalah\LaravelXendit\Models;

use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Hanafalah\LaravelSupport\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hanafalah\LaravelXendit\Resources\XPaymentMethod\{
    ViewXPaymentMethod,
    ShowXPaymentMethod
};
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class XPaymentMethod extends BaseModel
{
    use HasUlids, HasProps, SoftDeletes;
    
    public $incrementing  = false;
    protected $keyType    = 'string';
    protected $primaryKey = 'id';
    public $list = [
        'id',
        'props',
    ];

    protected $casts = [
        'name' => 'string'
    ];


    public function getViewResource(){
        return ViewXPaymentMethod::class;
    }

    public function getShowResource(){
        return ShowXPaymentMethod::class;
    }
}
