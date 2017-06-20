<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsOpenPayload;
use CL\Slack\Transport\ApiClient;

class GroupsOpen extends GroupsOpenPayload
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
