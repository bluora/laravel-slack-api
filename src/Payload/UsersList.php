<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\UsersListPayload;
use CL\Slack\Transport\ApiClient;

class UsersList extends UsersListPayload
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
     * Get or set the presence.
     *
     * @param ApiClient $client
     */
    public function presence($presence = false)
    {
        if ($presence === false) {
            return $this->getPresence();
        }

        $this->setPresence($presence);

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
