<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\SearchFilesPayload;
use CL\Slack\Transport\ApiClient;

class SearchFiles extends SearchFilesPayload
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
     * Send.
     *
     * @return mixed.
     */
    public function send()
    {
        return $this->client->send($this);
    }
}
