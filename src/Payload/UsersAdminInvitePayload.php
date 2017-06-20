<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\UsersAdminInvitePayload as OriginalUsersAdminInvitePayload;
use CL\Slack\Payload\UsersAdminInvitePayloadResponse;
use CL\Slack\Transport\ApiClient;

class UsersAdminInvitePayload extends OriginalUsersAdminInvitePayload
{

    /**
     * Get or set the email.
     *
     * @param ApiClient $client
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
