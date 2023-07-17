<?php

namespace Chinmay\OpenApi;

use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Collection;

class Paths implements Jsonable
{
    protected Collection $paths;

    public function __construct()
    {
        $this->paths = Collection::make();
    }

    public function put(string $key, PathItem $pathItem): Paths
    {
        $this->paths->put($key, $pathItem);
        return $this;
    }

    public function toJson($options = 0): string
    {
        return $this->paths->toJson($options);
    }
}