<?php

namespace Hanafalah\LaravelXendit\Contracts\Schemas;

use Hanafalah\LaravelXendit\Contracts\Data\XWalletData;
//use Hanafalah\LaravelXendit\Contracts\Data\XWalletUpdateData;
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\LaravelXendit\Schemas\XWallet
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateXWallet(?XWalletData $x_wallet_dto = null)
 * @method Model prepareUpdateXWallet(XWalletData $x_wallet_dto)
 * @method bool deleteXWallet()
 * @method bool prepareDeleteXWallet(? array $attributes = null)
 * @method mixed getXWallet()
 * @method ?Model prepareShowXWallet(?Model $model = null, ?array $attributes = null)
 * @method array showXWallet(?Model $model = null)
 * @method Collection prepareViewXWalletList()
 * @method array viewXWalletList()
 * @method LengthAwarePaginator prepareViewXWalletPaginate(PaginateData $paginate_dto)
 * @method array viewXWalletPaginate(?PaginateData $paginate_dto = null)
 * @method array storeXWallet(?XWalletData $x_wallet_dto = null)
 * @method Collection prepareStoreMultipleXWallet(array $datas)
 * @method array storeMultipleXWallet(array $datas)
 */

interface XWallet extends DataManagement
{
    public function prepareStoreXWallet(XWalletData $x_wallet_dto): Model;
}