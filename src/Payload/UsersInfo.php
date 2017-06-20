<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\UsersInfoPayload;
use CL\Slack\Transport\ApiClient;

class UsersInfo extends UsersInfoPayload
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
