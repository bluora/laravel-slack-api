<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\UsersIdentityPayload as OriginalUsersIdentityPayload;
use CL\Slack\Payload\UsersIdentityPayloadResponse;

class UsersIdentityPayload extends OriginalUsersIdentityPayload
{

    /**
     * Get or set the token.
     *
     * @param mixed $token
     */
    public function token()
    {
        if (func_num_args() == 0) {
            return $this->getToken();
        }

        $this->setToken(func_get_arg(0));

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
