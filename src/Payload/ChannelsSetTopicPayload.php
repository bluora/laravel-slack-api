<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChannelsSetTopicPayload as OriginalChannelsSetTopicPayload;
use CL\Slack\Payload\ChannelsSetTopicPayloadResponse;

class ChannelsSetTopicPayload extends OriginalChannelsSetTopicPayload
{

    /**
     * Get or set the channel id.
     *
     * @param mixed $channelId
     */
    public function channelId()
    {
        if (func_num_args() == 0) {
            return $this->getChannelId();
        }

        $this->setChannelId(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the topic.
     *
     * @param mixed $topic
     */
    public function topic()
    {
        if (func_num_args() == 0) {
            return $this->getTopic();
        }

        $this->setTopic(func_get_arg(0));

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
