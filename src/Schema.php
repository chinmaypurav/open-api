<?php

namespace Chinmay\OpenApi;

class Schema
{
    public string $type;

    public string $format;

    public string $items;

    public array $required;

    public array $properties;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * @param string $items
     * @return Schema
     */
    public function setItems(string $items): Schema
    {
        $this->items = $items;
        return $this;
    }

    public function setFormat(string $format): Schema
    {
        $this->format = $format;
        return $this;
    }

    /**
     * @param array $required
     * @return Schema
     */
    public function setRequired(array $required): Schema
    {
        $this->required = $required;
        return $this;
    }

    public function putRequired(mixed $required): Schema
    {
        $this->required[] = $required;
        return $this;
    }

    /**
     * @param array $properties
     * @return Schema
     */
    public function setProperties(array $properties): Schema
    {
        $this->properties = $properties;
        return $this;
    }
}