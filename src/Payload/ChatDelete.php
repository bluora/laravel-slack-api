<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChatDeletePayload;
use CL\Slack\Transport\ApiClient;

class ChatDelete extends ChatDeletePayload
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
     * Get or set the slack timestamp.
     *
     * @param ApiClient $client
     */
    public function slackTimestamp($slackTimestamp = false)
    {
        if ($slackTimestamp === false) {
            return $this->getSlackTimestamp();
        }

        $this->setSlackTimestamp($slackTimestamp);

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
