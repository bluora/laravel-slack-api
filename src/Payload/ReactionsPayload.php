<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ReactionsPayload as OriginalReactionsPayload;
use CL\Slack\Payload\ReactionsPayloadResponse;

class ReactionsPayload extends OriginalReactionsPayload
{

    /**
     * Get or set the channel id.
     *
     * @param mixed $channelId
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
     * Get or set the timestamp.
     *
     * @param mixed $timestamp
     */
    public function timestamp($timestamp = false)
    {
        if ($timestamp === false) {
            return $this->getTimestamp();
        }

        $this->setTimestamp($timestamp);

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
