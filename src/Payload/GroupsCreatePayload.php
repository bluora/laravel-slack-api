<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsCreatePayload as OriginalGroupsCreatePayload;
use CL\Slack\Payload\GroupsCreatePayloadResponse;

class GroupsCreatePayload extends OriginalGroupsCreatePayload
{

    /**
     * Get or set the name.
     *
     * @param mixed $name
     */
    public function name($name = false)
    {
        if ($name === false) {
            return $this->getName();
        }

        $this->setName($name);

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
