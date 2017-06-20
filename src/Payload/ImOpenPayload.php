<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ImOpenPayload as OriginalImOpenPayload;
use CL\Slack\Payload\ImOpenPayloadResponse;

class ImOpenPayload extends OriginalImOpenPayload
{

    /**
     * Get or set the user id.
     *
     * @param mixed $userId
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
