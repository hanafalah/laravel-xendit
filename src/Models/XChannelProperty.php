<?php

namespace Hanafalah\LaravelXendit\Models;

use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Hanafalah\LaravelSupport\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hanafalah\LaravelXendit\Resources\XChannelProperty\{
    ViewXChannelProperty,
    ShowXChannelProperty
};
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class XChannelProperty extends BaseModel
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
        return ViewXChannelProperty::class;
    }

    public function getShowResource(){
        return ShowXChannelProperty::class;
    }

    

    
}
