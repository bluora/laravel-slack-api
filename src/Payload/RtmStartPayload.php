<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\RtmStartPayload as OriginalRtmStartPayload;
use CL\Slack\Payload\RtmStartPayloadResponse;
use CL\Slack\Transport\ApiClient;

class RtmStartPayload extends OriginalRtmStartPayload
{

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
