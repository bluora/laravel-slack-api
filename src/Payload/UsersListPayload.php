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
