<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\UsersAdminInvitePayload as OriginalUsersAdminInvitePayload;
use CL\Slack\Payload\UsersAdminInvitePayloadResponse;

class UsersAdminInvitePayload extends OriginalUsersAdminInvitePayload
{

    /**
     * Get or set the email.
     *
     * @param mixed $email
     */
    public function email($email = false)
    {
        if ($email === false) {
            return $this->getEmail();
        }

        $this->setEmail($email);

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
