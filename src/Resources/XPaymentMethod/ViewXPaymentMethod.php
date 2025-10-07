<?php

namespace Hanafalah\LaravelXendit\Resources\XPaymentMethod;

use Hanafalah\LaravelSupport\Resources\ApiResource;

class ViewXPaymentMethod extends ApiResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray(\Illuminate\Http\Request $request): array
  {
    return json_decode(json_encode($this->resource), true) ?? [];
  }
}
