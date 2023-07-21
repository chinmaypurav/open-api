<?php

namespace Chinmay\OpenApi;

class Contact
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var string
     */
    public string $url;

    /**
     * @var string
     */
    public string $email;

    /**
     * @param string $name
     * @return Contact
     */
    public function setName(string $name): Contact
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $url
     * @return Contact
     */
    public function setUrl(string $url): Contact
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @param string $email
     * @return Contact
     */
    public function setEmail(string $email): Contact
    {
        $this->email = $email;
        return $this;
    }
}