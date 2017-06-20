<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsHistoryPayload;
use CL\Slack\Transport\ApiClient;

class GroupsHistory extends GroupsHistoryPayload
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
