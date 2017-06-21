<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChannelsMarkPayload as OriginalChannelsMarkPayload;
use CL\Slack\Payload\ChannelsMarkPayloadResponse;

class ChannelsMarkPayload extends OriginalChannelsMarkPayload
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
     * Get or set the slack timestamp.
     *
     * @param mixed $slackTimestamp
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
     * Set the endpoint.
     *
     * @return mixed.
     */
    public function endpoint($endpoint)
    {
        global $app;

        $app['bluora.slackapi']->endpoint($endpoint);

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
