<?php

namespace Chinmay\OpenApi;

class Parameter
{
    public string $name;

    public string $in;

    public string $description;

    public bool $required;

    public bool $deprecated = false;

    public bool $allowEmptyValue;

    public function __construct(string $name, string $in)
    {
        $this->name = $name;
        $this->in = $in;
        $this->required = $in === 'path';
    }
}