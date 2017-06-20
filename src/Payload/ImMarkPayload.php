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
    public function imId($imId = false)
    {
        if ($imId === false) {
            return $this->getImId();
        }

        $this->setImId($imId);

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
