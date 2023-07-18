<?php

namespace Chinmay\OpenApi;

use Illuminate\Support\Collection;
use JsonSerializable;

class Responses implements JsonSerializable
{
    public Collection $resource;

    public function __construct()
    {
        $this->resource = Collection::make();
    }

    public function put(string $key, Response $response): Responses
    {
        $this->resource->put($key, $response);
        return $this;
    }

    public function putDefault(Response $response): Responses
    {
        return $this->put('default', $response);
    }

    public function jsonSerialize(): array
    {
        return $this->resource->toArray();
    }
}