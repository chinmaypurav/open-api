<?php

namespace Chinmay\OpenApi;

class PathItem
{
    /**
     * @var string
     */
    public string $summary;

    /**
     * @var string
     */
    public string $description;

    /**
     * @var Operation
     */
    public Operation $get;

    /**
     * @var Operation
     */
    public Operation $put;

    /**
     * @var Operation
     */
    public Operation $post;

    /**
     * @var Operation
     */
    public Operation $delete;

    /**
     * @var Operation
     */
    public Operation $options;

    /**
     * @var Operation
     */
    public Operation $head;
    /**
     * @var Operation
     */
    public Operation $patch;
    /**
     * @var Operation
     */
    public Operation $trace;

    /**
     * @var array[Server]
     */
    public array $servers;

    /**
     * @param string $summary
     * @return PathItem
     */
    public function setSummary(string $summary): PathItem
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @param string $description
     * @return PathItem
     */
    public function setDescription(string $description): PathItem
    {
        $this->description = $description;
        return $this;
    }

    public function setOperation(string $type, Operation $operation): PathItem
    {
        $this->{$type} = $operation;
        return $this;
    }

    /**
     * @param array $servers
     * @return PathItem
     */
    public function setServers(array $servers): PathItem
    {
        $this->servers = $servers;
        return $this;
    }
}