<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ImClosePayload as OriginalImClosePayload;
use CL\Slack\Payload\ImClosePayloadResponse;

class ImClosePayload extends OriginalImClosePayload
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
