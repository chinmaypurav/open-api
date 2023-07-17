<?php

namespace Chinmay\OpenApi;

use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Collection;

class SecurityRequirement implements Jsonable
{
    protected Collection $collection;
    
    public function __construct()
    {
        $this->collection = Collection::make();
    }

    public function put(string $key, array $names): SecurityRequirement
    {
        $this->collection->put($key, $names);
        return $this;
    }

    public function toJson($options = 0): string
    {
        return $this->collection->toJson($options);
    }
}