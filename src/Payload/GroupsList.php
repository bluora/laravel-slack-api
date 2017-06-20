<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsListPayload;
use CL\Slack\Transport\ApiClient;

class GroupsList extends GroupsListPayload
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
