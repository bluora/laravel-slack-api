<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChannelsJoinPayload as OriginalChannelsJoinPayload;
use CL\Slack\Payload\ChannelsJoinPayloadResponse;

class ChannelsJoinPayload extends OriginalChannelsJoinPayload
{

    /**
     * Get or set the name.
     *
     * @param mixed $name
     */
    public function name()
    {
        if (func_num_args() == 0) {
            return $this->getName();
        }

        $this->setName(func_get_arg(0));

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
