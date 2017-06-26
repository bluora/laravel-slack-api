<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsKickPayload as OriginalGroupsKickPayload;
use CL\Slack\Payload\GroupsKickPayloadResponse;

class GroupsKickPayload extends OriginalGroupsKickPayload
{

    /**
     * Get or set the group id.
     *
     * @param mixed $groupId
     */
    public function groupId()
    {
        if (func_num_args() == 0) {
            return $this->getGroupId();
        }

        $this->setGroupId(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the user id.
     *
     * @param mixed $userId
     */
    public function userId()
    {
        if (func_num_args() == 0) {
            return $this->getUserId();
        }

        $this->setUserId(func_get_arg(0));

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

        if (func_num_args() == 1) {
            $app['bluora.slackapi']->accessToken(func_get_arg(0));
        }

        return $app['bluora.slackapi']->send($this);
    }
}
