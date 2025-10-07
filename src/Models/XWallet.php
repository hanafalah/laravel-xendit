<?php

namespace Hanafalah\LaravelXendit\Models;

use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Hanafalah\LaravelSupport\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hanafalah\LaravelXendit\Resources\XWallet\{
    ViewXWallet,
    ShowXWallet
};
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class XWallet extends BaseModel
{
    use HasUlids, HasProps, SoftDeletes;
    
    public $incrementing  = false;
    protected $keyType    = 'string';
    protected $primaryKey = 'id';
    public $list = [
        'id',
        'name',
        'props',
    ];

    protected $casts = [
        'name' => 'string'
    ];

    

    public function viewUsingRelation(): array{
        return [];
    }

    public function showUsingRelation(): array{
        return [];
    }

    public function getViewResource(){
        return ViewXWallet::class;
    }

    public function getShowResource(){
        return ShowXWallet::class;
    }

    

    
}
