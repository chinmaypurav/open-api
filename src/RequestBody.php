<?php

namespace Chinmay\OpenApi;

class RequestBody
{
    public string $description;

    public array $content;

    public bool $required = false;

    public function __construct(array $content = [])
    {
        $this->content = $content;
    }

    public function putContent(MediaType $mediaType): RequestBody
    {
        $this->content[] = $mediaType;
        return $this;
    }
}