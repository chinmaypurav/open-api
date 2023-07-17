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

    /**
     * @param Operation $get
     * @return PathItem
     */
    public function setGet(Operation $get): PathItem
    {
        $this->get = $get;
        return $this;
    }

    /**
     * @param Operation $put
     * @return PathItem
     */
    public function setPut(Operation $put): PathItem
    {
        $this->put = $put;
        return $this;
    }

    /**
     * @param Operation $post
     * @return PathItem
     */
    public function setPost(Operation $post): PathItem
    {
        $this->post = $post;
        return $this;
    }

    /**
     * @param Operation $delete
     * @return PathItem
     */
    public function setDelete(Operation $delete): PathItem
    {
        $this->delete = $delete;
        return $this;
    }

    /**
     * @param Operation $options
     * @return PathItem
     */
    public function setOptions(Operation $options): PathItem
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @param Operation $head
     * @return PathItem
     */
    public function setHead(Operation $head): PathItem
    {
        $this->head = $head;
        return $this;
    }

    /**
     * @param Operation $patch
     * @return PathItem
     */
    public function setPatch(Operation $patch): PathItem
    {
        $this->patch = $patch;
        return $this;
    }

    /**
     * @param Operation $trace
     * @return PathItem
     */
    public function setTrace(Operation $trace): PathItem
    {
        $this->trace = $trace;
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