<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChannelsHistoryPayload as OriginalChannelsHistoryPayload;
use CL\Slack\Payload\ChannelsHistoryPayloadResponse;
use CL\Slack\Transport\ApiClient;

class ChannelsHistoryPayload extends OriginalChannelsHistoryPayload
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
     * Get or set the latest.
     *
     * @param ApiClient $client
     */
    public function latest($latest = false)
    {
        if ($latest === false) {
            return $this->getLatest();
        }

        $this->setLatest($latest);

        return $this;
    }

    /**
     * Get or set the oldest.
     *
     * @param ApiClient $client
     */
    public function oldest($oldest = false)
    {
        if ($oldest === false) {
            return $this->getOldest();
        }

        $this->setOldest($oldest);

        return $this;
    }

    /**
     * Get or set the count.
     *
     * @param ApiClient $client
     */
    public function count($count = false)
    {
        if ($count === false) {
            return $this->getCount();
        }

        $this->setCount($count);

        return $this;
    }

    /**
     * Get or set the inclusive.
     *
     * @param ApiClient $client
     */
    public function inclusive($inclusive = false)
    {
        if ($inclusive === false) {
            return $this->getInclusive();
        }

        $this->setInclusive($inclusive);

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