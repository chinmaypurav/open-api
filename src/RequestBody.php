<?php

namespace Chinmay\OpenApi;

class RequestBody
{
    public string $description;

    public string|MediaType $content;

    public bool $required = false;

    public function __construct(string|MediaType $mediaType)
    {
        $this->content = $mediaType;
    }
}