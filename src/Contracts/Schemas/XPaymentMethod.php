<?php

namespace Hanafalah\LaravelXendit\Contracts\Schemas;

use Hanafalah\LaravelXendit\Contracts\Data\XPaymentMethodData;
//use Hanafalah\LaravelXendit\Contracts\Data\XPaymentMethodUpdateData;
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\LaravelXendit\Schemas\XPaymentMethod
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateXPaymentMethod(?XPaymentMethodData $x_payment_method_dto = null)
 * @method Model prepareUpdateXPaymentMethod(XPaymentMethodData $x_payment_method_dto)
 * @method bool deleteXPaymentMethod()
 * @method bool prepareDeleteXPaymentMethod(? array $attributes = null)
 * @method mixed getXPaymentMethod()
 * @method ?Model prepareShowXPaymentMethod(?Model $model = null, ?array $attributes = null)
 * @method array showXPaymentMethod(?Model $model = null)
 * @method Collection prepareViewXPaymentMethodList()
 * @method array viewXPaymentMethodList()
 * @method LengthAwarePaginator prepareViewXPaymentMethodPaginate(PaginateData $paginate_dto)
 * @method array viewXPaymentMethodPaginate(?PaginateData $paginate_dto = null)
 * @method array storeXPaymentMethod(?XPaymentMethodData $x_payment_method_dto = null)
 * @method Collection prepareStoreMultipleXPaymentMethod(array $datas)
 * @method array storeMultipleXPaymentMethod(array $datas)
 */

interface XPaymentMethod extends DataManagement
{
    public function prepareViewXPaymentMethodList(XPaymentMethodData $x_payment_method_dto);
}