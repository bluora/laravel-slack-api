<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\UsersSetPresencePayload as OriginalUsersSetPresencePayload;
use CL\Slack\Payload\UsersSetPresencePayloadResponse;
use CL\Slack\Transport\ApiClient;

class UsersSetPresencePayload extends OriginalUsersSetPresencePayload
{

    /**
     * Get or set the presence.
     *
     * @param ApiClient $client
     */
    public function presence($presence = false)
    {
        if ($presence === false) {
            return $this->getPresence();
        }

        $this->setPresence($presence);

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
