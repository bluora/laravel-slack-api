<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\FilesListPayload;
use CL\Slack\Transport\ApiClient;

class FilesList extends FilesListPayload
{
    protected $client;

    /**
     * Set the client.
     *
     * @param ApiClient $client
     */
    public function setClient(ApiClient &$client)
    {
        $this->client($client);

        return $this;
    }

    /**
     * Get or set the user id.
     *
     * @param ApiClient $client
     */
    public function userId($userId = false)
    {
        if ($userId === false) {
            return $this->getUserId();
        }

        $this->setUserId($userId);

        return $this;
    }

    /**
     * Get or set the timestamp from.
     *
     * @param ApiClient $client
     */
    public function timestampFrom($timestampFrom = false)
    {
        if ($timestampFrom === false) {
            return $this->getTimestampFrom();
        }

        $this->setTimestampFrom($timestampFrom);

        return $this;
    }

    /**
     * Get or set the timestamp to.
     *
     * @param ApiClient $client
     */
    public function timestampTo($timestampTo = false)
    {
        if ($timestampTo === false) {
            return $this->getTimestampTo();
        }

        $this->setTimestampTo($timestampTo);

        return $this;
    }

    /**
     * Get or set the count.
     *
     * @param ApiClient $client
     */
    public function count($count = false)
    {
        if ($count === false) {
            return $this->getCount();
        }

        $this->setCount($count);

        return $this;
    }

    /**
     * Get or set the page.
     *
     * @param ApiClient $client
     */
    public function page($page = false)
    {
        if ($page === false) {
            return $this->getPage();
        }

        $this->setPage($page);

        return $this;
    }

    /**
     * Get or set the types.
     *
     * @param ApiClient $client
     */
    public function types($types = false)
    {
        if ($types === false) {
            return $this->getTypes();
        }

        $this->setTypes($types);

        return $this;
    }

    /**
     * Get or set the types from string.
     *
     * @param ApiClient $client
     */
    public function typesFromString($typesFromString = false)
    {
        if ($typesFromString === false) {
            return $this->getTypesFromString();
        }

        $this->setTypesFromString($typesFromString);

        return $this;
    }

    /**
     * Send.
     *
     * @return mixed.
     */
    public function send()
    {
        return $this->client->send($this);
    }
}
