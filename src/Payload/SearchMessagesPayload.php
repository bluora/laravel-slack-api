<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\SearchMessagesPayload as OriginalSearchMessagesPayload;
use CL\Slack\Payload\SearchMessagesPayloadResponse;

class SearchMessagesPayload extends OriginalSearchMessagesPayload
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
