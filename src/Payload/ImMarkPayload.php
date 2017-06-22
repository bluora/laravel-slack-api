<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ImMarkPayload as OriginalImMarkPayload;
use CL\Slack\Payload\ImMarkPayloadResponse;

class ImMarkPayload extends OriginalImMarkPayload
{

    /**
     * Get or set the im id.
     *
     * @param mixed $imId
     */
    public function imId()
    {
        if (func_num_args() == 0) {
            return $this->getImId();
        }

        $this->setImId(func_get_arg(0));

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

        return $app['bluora.slackapi']->send($this);
    }
}
