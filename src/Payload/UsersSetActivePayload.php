<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\UsersSetActivePayload as OriginalUsersSetActivePayload;
use CL\Slack\Payload\UsersSetActivePayloadResponse;
use CL\Slack\Transport\ApiClient;

class UsersSetActivePayload extends OriginalUsersSetActivePayload
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
