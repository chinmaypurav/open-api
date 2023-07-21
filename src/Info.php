<?php

namespace Chinmay\OpenApi;

class Info
{
    public string $title;

    public string $summary;

    public string $description;

    public string $termsOfService;

    public Contact $contact;

    public License $license;

    public string $version;

    public function __construct(string $title, string $version)
    {
        $this->title = $title;
        $this->version = $version;
    }

    /**
     * @param string $title
     * @return Info
     */
    public function setTitle(string $title): Info
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @param string $summary
     * @return Info
     */
    public function setSummary(string $summary): Info
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @param string $description
     * @return Info
     */
    public function setDescription(string $description): Info
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string $termsOfService
     * @return Info
     */
    public function setTermsOfService(string $termsOfService): Info
    {
        $this->termsOfService = $termsOfService;
        return $this;
    }

    /**
     * @param Contact $contact
     * @return Info
     */
    public function setContact(Contact $contact): Info
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * @param License $license
     * @return Info
     */
    public function setLicense(License $license): Info
    {
        $this->license = $license;
        return $this;
    }

    /**
     * @param string $version
     * @return Info
     */
    public function setVersion(string $version): Info
    {
        $this->version = $version;
        return $this;
    }

}