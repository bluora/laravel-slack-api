<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChannelsUnarchivePayload;
use CL\Slack\Transport\ApiClient;

class ChannelsUnarchive extends ChannelsUnarchivePayload
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
     * Get or set the channel id.
     *
     * @param ApiClient $client
     */
    public function channelId($channelId = false)
    {
        if ($channelId === false) {
            return $this->getChannelId();
        }

        $this->setChannelId($channelId);

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
