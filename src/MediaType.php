<?php

namespace Chinmay\OpenApi;

class MediaType
{
    public Schema $schema;

    public mixed $example;

    public array $examples;

    public array $encoding;

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
}