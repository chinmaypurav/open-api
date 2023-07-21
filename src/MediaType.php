<?php

namespace Chinmay\OpenApi;

use JsonSerializable;

class MediaType implements JsonSerializable
{
    protected string $key;

    public Schema $schema;

    public mixed $example = null;

    public array $examples = [];

    public array $encoding = [];

    public function __construct(string $key = 'application/json')
    {
        $this->key = $key;
    }

    /**
     * @param Schema $schema
     * @return MediaType
     */
    public function setSchema(Schema $schema): MediaType
    {
        $this->schema = $schema;
        return $this;
    }

    /**
     * @param mixed $example
     * @return MediaType
     */
    public function setExample(mixed $example): MediaType
    {
        $this->example = $example;
        return $this;
    }

    /**
     * @param array $examples
     * @return MediaType
     */
    public function setExamples(array $examples): MediaType
    {
        $this->examples = $examples;
        return $this;
    }

    /**
     * @param array $encoding
     * @return MediaType
     */
    public function setEncoding(array $encoding): MediaType
    {
        $this->encoding = $encoding;
        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            $this->key => array_filter([
                'schema' => $this->schema,
                'example' => $this->example,
                'examples' => $this->examples,
                'encoding' => $this->encoding,
            ])
        ];
    }
}