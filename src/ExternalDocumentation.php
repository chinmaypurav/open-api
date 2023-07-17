<?php

namespace Chinmay\OpenApi;

class ExternalDocumentation
{
    public string $url;

    public string $description;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * @param string $description
     * @return ExternalDocumentation
     */
    public function setDescription(string $description): ExternalDocumentation
    {
        $this->description = $description;
        return $this;
    }
}