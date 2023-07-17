<?php

namespace Chinmay\OpenApi;

class Server
{
    public string $url;

    public string $description;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    /**
     * @param string $description
     * @return Server
     */
    public function setDescription(string $description): Server
    {
        $this->description = $description;
        return $this;
    }
}