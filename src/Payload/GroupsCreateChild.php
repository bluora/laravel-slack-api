<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsCreateChildPayload;
use CL\Slack\Transport\ApiClient;

class GroupsCreateChild extends GroupsCreateChildPayload
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
