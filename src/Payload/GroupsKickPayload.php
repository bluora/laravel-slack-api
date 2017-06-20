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
    public function groupId($groupId = false)
    {
        if ($groupId === false) {
            return $this->getGroupId();
        }

        $this->setGroupId($groupId);

        return $this;
    }

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
