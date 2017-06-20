<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ImClosePayload as OriginalImClosePayload;
use CL\Slack\Payload\ImClosePayloadResponse;
use CL\Slack\Transport\ApiClient;

class ImClosePayload extends OriginalImClosePayload
{

    /**
     * Get or set the im id.
     *
     * @param ApiClient $client
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