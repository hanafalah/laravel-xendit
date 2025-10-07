<?php

namespace Hanafalah\LaravelXendit;

use Hanafalah\LaravelXendit\LaravelXendit;
use Hanafalah\LaravelSupport\Providers\BaseServiceProvider;

class LaravelXenditServiceProvider extends BaseServiceProvider
{
  public function register()
  {
      $this->registerMainClass(LaravelXendit::class)
      ->registerCommandService(Providers\CommandServiceProvider::class)
      ->registers(['*']);
  }

  protected function dir(): string
  {
    return __DIR__ . '/';
  }
}
