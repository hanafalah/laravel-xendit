<?php

namespace Hanafalah\LaravelXendit\Supports;

use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Hanafalah\LaravelSupport\Supports\PackageManagement;
use Xendit\Configuration;
use Illuminate\Support\Str;

class BaseLaravelXendit extends PackageManagement implements DataManagement
{
    protected $__config_name = 'laravel-xendit';
    protected $__laravel_xendit_config = [];
    protected $__xendit_configuration;
    protected $__current_class = null;
    protected $__host = [
        'development' => 'https://api.xendit.co', 
        'production' => 'https://api.xendit.co'
    ];

    protected $__end_points = [];

    /**
     * A description of the entire PHP function.
     *
     * @param Container $app The Container instance
     * @throws Exception description of exception
     * @return void
     */
    public function __construct(){
        $this->setConfig($this->__config_name, $this->__laravel_xendit_config);
        $this->initConfiguration()->setApiKey();
    }

    protected function viewEntityWithData(mixed $data){
        return $this->viewEntityResource(function() use ($data){
            return collect(json_decode($data)->data);
        });
    }

    public function generalViewList(): array{
        return $this->viewEntityResource(function(){
            return $this->{'prepareView'.$this->getEntity().'List'}(
                $this->requestDTO(config("app.contracts.{$this->getEntity()}Data"))
            );
        });
    }

    public function initConfiguration(): self{
        $this->__xendit_configuration = Configuration::class;
        return $this;
    }

    public function getCurrentClass(? string $class = null){
        return app($class ?? $this->__current_class);
    }

    public function setApiKey(?string $key = null){
        $key ??= config('laravel-xendit.api_key');
        $this->__xendit_configuration::setXenditKey($key);
    }

    protected function isProduction(): bool{
        return config('app.env') === 'production';
    }

    // protected function getHost(? string $type = null): string{
    //     $host_type = ($this->isProduction()) ? 'production' : 'development';
    //     $host = $this->__host[$host_type];
    //     if (isset($type)){
    //         if (isset($this->__end_points[$type])){
    //             $host .= '/'.$this->__end_points[$type];
    //         }else{
    //             throw new \Exception('Invalid endpoint type', 422);
    //         }
    //     }
    //     return $host;
    // }
}
