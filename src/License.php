<?php

namespace Chinmay\OpenApi;

class License
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $identifier;

    /**
     * @var string
     */
    public string $url;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param string $name
     * @return License
     */

    /**
     * @param string $identifier
     * @return License
     */
    public function setIdentifier(string $identifier): License
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * @param string $url
     * @return License
     */
    public function setUrl(string $url): License
    {
        $this->url = $url;
        return $this;
    }
}