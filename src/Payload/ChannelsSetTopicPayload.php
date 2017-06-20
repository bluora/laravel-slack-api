<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChannelsSetTopicPayload as OriginalChannelsSetTopicPayload;
use CL\Slack\Payload\ChannelsSetTopicPayloadResponse;
use CL\Slack\Transport\ApiClient;

class ChannelsSetTopicPayload extends OriginalChannelsSetTopicPayload
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
     * Get or set the topic.
     *
     * @param ApiClient $client
     */
    public function topic($topic = false)
    {
        if ($topic === false) {
            return $this->getTopic();
        }

        $this->setTopic($topic);

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
