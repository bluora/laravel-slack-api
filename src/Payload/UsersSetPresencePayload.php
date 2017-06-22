<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\UsersSetPresencePayload as OriginalUsersSetPresencePayload;
use CL\Slack\Payload\UsersSetPresencePayloadResponse;

class UsersSetPresencePayload extends OriginalUsersSetPresencePayload
{

    /**
     * Get or set the presence.
     *
     * @param mixed $presence
     */
    public function presence()
    {
        if (func_num_args() == 0) {
            return $this->getPresence();
        }

        $this->setPresence(func_get_arg(0));

        return $this;
    }

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
