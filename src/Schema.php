<?php

namespace Chinmay\OpenApi;

class Schema
{
    public string $type;

    public string $format;

    public string $items;

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
}