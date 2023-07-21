<?php

namespace Chinmay\OpenApi;

use Illuminate\Contracts\Support\Jsonable;

class OpenApi implements Jsonable
{
    /**
     * @var string
     */
    public string $openapi = '3.0.0';

    /**
     * @var Info
     */
    public Info $info;

    /**
     * @var string
     */
    public string $jsonSchemaDialect;

    /**
     * @var array [Server]
     */
    public array $servers;

    /**
     * @var Paths
     */
    public Paths $paths;

    /**
     * @var SecurityRequirement
     */
    public SecurityRequirement $security;

    /**
     * @var array [Tag]
     */
    public array $tag;

    /**
     * @var ExternalDocumentation
     */
    public ExternalDocumentation $externalDocs;

    /**
     * @param Info $info
     * @return OpenApi
     */
    public function setInfo(Info $info): OpenApi
    {
        $this->info = $info;
        return $this;
    }

    /**
     * @param string $openapi
     * @return OpenApi
     */
    public function setOpenapi(string $openapi): OpenApi
    {
        $this->openapi = $openapi;
        return $this;
    }

    /**
     * @param string $jsonSchemaDialect
     * @return OpenApi
     */
    public function setJsonSchemaDialect(string $jsonSchemaDialect): OpenApi
    {
        $this->jsonSchemaDialect = $jsonSchemaDialect;
        return $this;
    }

    /**
     * @param array $servers
     * @return OpenApi
     */
    public function setServers(array $servers): OpenApi
    {
        $this->servers = $servers;
        return $this;
    }

    /**
     * @param Paths $paths
     * @return OpenApi
     */
    public function setPaths(Paths $paths): OpenApi
    {
        $this->paths = $paths;
        return $this;
    }

    /**
     * @param SecurityRequirement $security
     * @return OpenApi
     */
    public function setSecurity(SecurityRequirement $security): OpenApi
    {
        $this->security = $security;
        return $this;
    }

    /**
     * @param array $tag
     * @return OpenApi
     */
    public function setTag(array $tag): OpenApi
    {
        $this->tag = $tag;
        return $this;
    }

    /**
     * @param ExternalDocumentation $externalDocs
     * @return OpenApi
     */
    public function setExternalDocs(ExternalDocumentation $externalDocs): OpenApi
    {
        $this->externalDocs = $externalDocs;
        return $this;
    }

    public function toJson($options = 0): bool|string
    {
        return json_encode($this, $options);
    }
}