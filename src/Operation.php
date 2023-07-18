<?php

namespace Chinmay\OpenApi;

class Operation
{
    /**
     * @var array[string]
     */
    public array $tags;

    /**
     * @var string
     */
    public string $string;

    /**
     * @var string
     */
    public string $description;

    public ExternalDocumentation $externalDocs;

    /**
     * @var string
     */
    public string $operationId;

    public Parameter $parameter;

    public Responses $responses;

    public bool $deprecated = false;

    public SecurityRequirement $security;

    public array $servers;

    /**
     * @param array $tags
     * @return Operation
     */
    public function setTags(array $tags): Operation
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @param string $string
     * @return Operation
     */
    public function setString(string $string): Operation
    {
        $this->string = $string;
        return $this;
    }

    /**
     * @param string $description
     * @return Operation
     */
    public function setDescription(string $description): Operation
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param ExternalDocumentation $externalDocs
     * @return Operation
     */
    public function setExternalDocs(ExternalDocumentation $externalDocs): Operation
    {
        $this->externalDocs = $externalDocs;
        return $this;
    }

    /**
     * @param string $operationId
     * @return Operation
     */
    public function setOperationId(string $operationId): Operation
    {
        $this->operationId = $operationId;
        return $this;
    }

    /**
     * @param Parameter $parameter
     * @return Operation
     */
    public function setParameter(Parameter $parameter): Operation
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * @param Responses $responses
     * @return Operation
     */
    public function setResponses(Responses $responses): Operation
    {
        $this->responses = $responses;
        return $this;
    }

    /**
     * @param bool $deprecated
     * @return Operation
     */
    public function setDeprecated(bool $deprecated): Operation
    {
        $this->deprecated = $deprecated;
        return $this;
    }

    /**
     * @param SecurityRequirement $security
     * @return Operation
     */
    public function setSecurity(SecurityRequirement $security): Operation
    {
        $this->security = $security;
        return $this;
    }

    /**
     * @param array $servers [Server] $servers
     * @return Operation
     */
    public function setServers(array $servers): Operation
    {
        $this->servers = $servers;
        return $this;
    }
}