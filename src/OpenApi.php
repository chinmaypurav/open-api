<?php

namespace Chinmay\OpenApi;

use Illuminate\Contracts\Support\Jsonable;

class OpenApi implements Jsonable
{
    public string $openapi = '3.1.0';

    public Info $info;

    public string $jsonSchemaDialect;

    /**
     * @param Info $info
     * @return OpenApi
     */
    public function setInfo(Info $info): OpenApi
    {
        $this->info = $info;
        return $this;
    }

    public function toJson($options = 0): bool|string
    {
        return json_encode($this, $options);
    }
}