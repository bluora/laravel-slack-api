<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChannelsSetPurposePayload as OriginalChannelsSetPurposePayload;
use CL\Slack\Payload\ChannelsSetPurposePayloadResponse;

class ChannelsSetPurposePayload extends OriginalChannelsSetPurposePayload
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
     * Get or set the purpose.
     *
     * @param mixed $purpose
     */
    public function purpose()
    {
        if (func_num_args() == 0) {
            return $this->getPurpose();
        }

        $this->setPurpose(func_get_arg(0));

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
