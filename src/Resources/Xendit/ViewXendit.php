<?php

namespace Hanafalah\LaravelXendit\Resources\Xendit;

use Hanafalah\LaravelSupport\Resources\ApiResource;

class ViewXendit extends ApiResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray(\Illuminate\Http\Request $request): array
  {
    $arr = [
      'id' => $this->id,
      'flag' => $this->flag,
      'props' => $this->getOriginal('props')
    ];
    return $arr;
  }
}
