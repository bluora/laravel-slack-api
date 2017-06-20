<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ImClosePayload;
use CL\Slack\Transport\ApiClient;

class ImClose extends ImClosePayload
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
     * Get or set the im id.
     *
     * @param ApiClient $client
     */
    public function imId($imId = false)
    {
        if ($imId === false) {
            return $this->getImId();
        }

        $this->setImId($imId);

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
