<?php

namespace Hanafalah\LaravelXendit\Schemas;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Hanafalah\LaravelXendit\{
    Supports\BaseLaravelXendit
};
use Hanafalah\LaravelXendit\Contracts\Schemas\XWallet as ContractsXWallet;
use Hanafalah\LaravelXendit\Contracts\Data\XWalletData;

class XWallet extends BaseLaravelXendit implements ContractsXWallet
{
    protected string $__entity = 'XWallet';
    public $x_wallet_model;
    //protected mixed $__order_by_created_at = false; //asc, desc, false

    protected array $__cache = [
        'index' => [
            'name'     => 'x_wallet',
            'tags'     => ['x_wallet', 'x_wallet-index'],
            'duration' => 24 * 60
        ]
    ];

    public function prepareStoreXWallet(XWalletData $x_wallet_dto): Model{
        $add = [
            'name' => $x_wallet_dto->name
        ];
        $guard  = ['id' => $x_wallet_dto->id];
        $create = [$guard, $add];
        // if (isset($x_wallet_dto->id)){
        //     $guard  = ['id' => $x_wallet_dto->id];
        //     $create = [$guard, $add];
        // }else{
        //     $create = [$add];
        // }

        $x_wallet = $this->usingEntity()->updateOrCreate(...$create);
        $this->fillingProps($x_wallet,$x_wallet_dto->props);
        $x_wallet->save();
        return $this->x_wallet_model = $x_wallet;
    }
}