<?php

namespace Hanafalah\LaravelXendit\Models;

use Hanafalah\LaravelXendit\Resources\XTransaction\{
    ViewXTransaction,
    ShowXTransaction
};

class XTransaction extends Xendit
{
    protected $table = 'xendit_logs';

    public function viewUsingRelation(): array{
        return [];
    }

    public function showUsingRelation(): array{
        return [];
    }

    public function getViewResource(){
        return ViewXTransaction::class;
    }

    public function getShowResource(){
        return ShowXTransaction::class;
    }

    

    
}
