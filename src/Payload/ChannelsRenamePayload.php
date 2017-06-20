<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChannelsRenamePayload as OriginalChannelsRenamePayload;
use CL\Slack\Payload\ChannelsRenamePayloadResponse;
use CL\Slack\Transport\ApiClient;

class ChannelsRenamePayload extends OriginalChannelsRenamePayload
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
     * Get or set the name.
     *
     * @param ApiClient $client
     */
    public function name($name = false)
    {
        if ($name === false) {
            return $this->getName();
        }

        $this->setName($name);

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
