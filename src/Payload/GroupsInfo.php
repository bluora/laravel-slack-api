<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsInfoPayload;
use CL\Slack\Transport\ApiClient;

class GroupsInfo extends GroupsInfoPayload
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
