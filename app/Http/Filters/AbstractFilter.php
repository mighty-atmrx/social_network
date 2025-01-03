<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

abstract class AbstractFilter implements FilterInterface
{
    public $queryParams = [];

    public function __construct(array $queryParams){
        $this->queryParams = $queryParams;
    }

    abstract protected function getCallbacks(): array;

    public function apply(Builder $builder){
        $this->before($builder);

        foreach($this->getCallbacks() as $name => $callback){
            if(isset($this->queryParams[$name])){
                call_user_func($callback, $builder, $this->queryParams[$name]);
            }
        }
    }

    public function before(Builder $builder)
    {

    }

    protected function getQueryParams(string $key, $default = null){
        return $this->queryParams[$key] ?? $default;
    }

    public function removeQueryParam(string ...$keys){
        foreach($keys as $key){
            unset($this->queryParams[$key]);
        }

        return $this;
    }


}
