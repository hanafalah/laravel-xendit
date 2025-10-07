<?php

namespace Hanafalah\LaravelXendit\Contracts\Schemas;

use Hanafalah\LaravelXendit\Contracts\Data\XChannelPropertyData;
//use Hanafalah\LaravelXendit\Contracts\Data\XChannelPropertyUpdateData;
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @see \Hanafalah\LaravelXendit\Schemas\XChannelProperty
 * @method mixed export(string $type)
 * @method self conditionals(mixed $conditionals)
 * @method array updateXChannelProperty(?XChannelPropertyData $x_channel_property_dto = null)
 * @method Model prepareUpdateXChannelProperty(XChannelPropertyData $x_channel_property_dto)
 * @method bool deleteXChannelProperty()
 * @method bool prepareDeleteXChannelProperty(? array $attributes = null)
 * @method mixed getXChannelProperty()
 * @method ?Model prepareShowXChannelProperty(?Model $model = null, ?array $attributes = null)
 * @method array showXChannelProperty(?Model $model = null)
 * @method Collection prepareViewXChannelPropertyList()
 * @method array viewXChannelPropertyList()
 * @method LengthAwarePaginator prepareViewXChannelPropertyPaginate(PaginateData $paginate_dto)
 * @method array viewXChannelPropertyPaginate(?PaginateData $paginate_dto = null)
 * @method array storeXChannelProperty(?XChannelPropertyData $x_channel_property_dto = null)
 * @method Collection prepareStoreMultipleXChannelProperty(array $datas)
 * @method array storeMultipleXChannelProperty(array $datas)
 */

interface XChannelProperty extends DataManagement
{
    public function prepareStoreXChannelProperty(XChannelPropertyData $x_channel_property_dto): Model;
}