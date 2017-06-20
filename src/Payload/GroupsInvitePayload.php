<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsInvitePayload as OriginalGroupsInvitePayload;
use CL\Slack\Payload\GroupsInvitePayloadResponse;
use CL\Slack\Transport\ApiClient;

class GroupsInvitePayload extends OriginalGroupsInvitePayload
{

    /**
     * Get or set the group id.
     *
     * @param ApiClient $client
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
     * @param ApiClient $client
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
