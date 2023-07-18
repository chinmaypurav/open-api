<?php

namespace Chinmay\OpenApi;

use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Collection;
use JsonSerializable;

class Paths implements JsonSerializable
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

    public function jsonSerialize(): array
    {
       return $this->paths->toArray();
    }
}