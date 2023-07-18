<?php

namespace Chinmay\OpenApi;

class Tag
{
    public string $name;

    public string $description;

    public ExternalDocumentation $externalDocs;

    /**
     * @param string $name
     * @return Tag
     */
    public function setName(string $name): Tag
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $description
     * @return Tag
     */
    public function setDescription(string $description): Tag
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param ExternalDocumentation $externalDocs
     * @return Tag
     */
    public function setExternalDocs(ExternalDocumentation $externalDocs): Tag
    {
        $this->externalDocs = $externalDocs;
        return $this;
    }
}