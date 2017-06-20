<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\UsersListPayload as OriginalUsersListPayload;
use CL\Slack\Payload\UsersListPayloadResponse;

class UsersListPayload extends OriginalUsersListPayload
{

    /**
     * Get or set the presence.
     *
     * @param mixed $presence
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
