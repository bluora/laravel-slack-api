<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChannelsSetPurposePayload;
use CL\Slack\Transport\ApiClient;

class ChannelsSetPurpose extends ChannelsSetPurposePayload
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
     * Get or set the purpose.
     *
     * @param ApiClient $client
     */
    public function purpose($purpose = false)
    {
        if ($purpose === false) {
            return $this->getPurpose();
        }

        $this->setPurpose($purpose);

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
