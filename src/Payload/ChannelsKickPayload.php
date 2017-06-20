<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChannelsKickPayload as OriginalChannelsKickPayload;
use CL\Slack\Payload\ChannelsKickPayloadResponse;
use CL\Slack\Transport\ApiClient;

class ChannelsKickPayload extends OriginalChannelsKickPayload
{

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
     * Get or set the user id.
     *
     * @param ApiClient $client
     */
    public function userId($userId = false)
    {
        if ($userId === false) {
            return $this->getUserId();
        }

        $this->setUserId($userId);

        return $this;
    }

    /**
     * Send.
     *
     * @return mixed.
     */
    public function send()
    {
        global $app;

        return $app['bluora.slackapi']->send($this);
    }
}
