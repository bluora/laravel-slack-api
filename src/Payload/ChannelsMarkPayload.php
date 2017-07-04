<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChannelsMarkPayload as OriginalChannelsMarkPayload;

class ChannelsMarkPayload extends OriginalChannelsMarkPayload
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
     * Get or set the slack timestamp.
     *
     * @param mixed $slackTimestamp
     */
    public function slackTimestamp()
    {
        if (func_num_args() == 0) {
            return $this->getSlackTimestamp();
        }

        $this->setSlackTimestamp(func_get_arg(0));

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

        if (func_num_args() == 1) {
            $app['bluora.slackapi']->accessToken(func_get_arg(0));
        }

        return $app['bluora.slackapi']->send($this);
    }
}
