<?php

namespace Hanafalah\LaravelXendit\Models;

use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Hanafalah\LaravelSupport\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hanafalah\LaravelXendit\Resources\Xendit\{
    ViewXendit,
    ShowXendit
};
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Xendit extends BaseModel
{
    use HasUlids, HasProps, SoftDeletes;
 
    protected $table = 'xendit_logs';
    public $incrementing  = false;
    protected $keyType    = 'string';
    protected $primaryKey = 'id';
    public $list = [
        'id',
        'flag',
        'props',
    ];

    protected $casts = [
        'flag' => 'string'
    ];

    public static function booted(): void{
        parent::booted();
        static::creating(function($query){
            $query->flag ??= (new static)->getMorphClass();
        });
    }

    public function viewUsingRelation(): array{
        return [];
    }

    public function showUsingRelation(): array{
        return [];
    }

    public function getViewResource(){
        return ViewXendit::class;
    }

    public function getShowResource(){
        return ShowXendit::class;
    }
}
