<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\SearchAllPayload as OriginalSearchAllPayload;
use CL\Slack\Payload\SearchAllPayloadResponse;

class SearchAllPayload extends OriginalSearchAllPayload
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
