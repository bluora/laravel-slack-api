<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\UsersSetActivePayload as OriginalUsersSetActivePayload;
use CL\Slack\Payload\UsersSetActivePayloadResponse;

class UsersSetActivePayload extends OriginalUsersSetActivePayload
{

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
