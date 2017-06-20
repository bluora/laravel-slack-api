<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\UsersInfoPayload as OriginalUsersInfoPayload;
use CL\Slack\Payload\UsersInfoPayloadResponse;
use CL\Slack\Transport\ApiClient;

class UsersInfoPayload extends OriginalUsersInfoPayload
{

    /**
     * Get or set the user id.
     *
     * @param ApiClient $client
     */
    public function userId($userId = false)
    {
        if ($userId === false) {
            return $this->getUserId();
        }

        $this->setUserId($userId);

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
