<?php

namespace Chinmay\OpenApi;

class Response
{
    public string $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }
}