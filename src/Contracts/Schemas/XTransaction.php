<?php

namespace Hanafalah\LaravelXendit\Contracts\Schemas;

use Hanafalah\LaravelXendit\Contracts\Data\XTransactionData;
//use Hanafalah\LaravelXendit\Contracts\Data\XTransactionUpdateData;
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\LaravelXendit\Schemas\XTransaction
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateXTransaction(?XTransactionData $x_transaction_dto = null)
 * @method Model prepareUpdateXTransaction(XTransactionData $x_transaction_dto)
 * @method bool deleteXTransaction()
 * @method bool prepareDeleteXTransaction(? array $attributes = null)
 * @method mixed getXTransaction()
 * @method ?Model prepareShowXTransaction(?Model $model = null, ?array $attributes = null)
 * @method array showXTransaction(?Model $model = null)
 * @method Collection prepareViewXTransactionList()
 * @method array viewXTransactionList()
 * @method LengthAwarePaginator prepareViewXTransactionPaginate(PaginateData $paginate_dto)
 * @method array viewXTransactionPaginate(?PaginateData $paginate_dto = null)
 * @method array storeXTransaction(?XTransactionData $x_transaction_dto = null)
 * @method Collection prepareStoreMultipleXTransaction(array $datas)
 * @method array storeMultipleXTransaction(array $datas)
 */

interface XTransaction extends DataManagement
{
    public function prepareStoreXTransaction(XTransactionData $x_transaction_dto): Model;
}