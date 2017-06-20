<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsMarkPayload as OriginalGroupsMarkPayload;
use CL\Slack\Payload\GroupsMarkPayloadResponse;

class GroupsMarkPayload extends OriginalGroupsMarkPayload
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
     * Get or set the slack timestamp.
     *
     * @param mixed $slackTimestamp
     */
    public function slackTimestamp($slackTimestamp = false)
    {
        if ($slackTimestamp === false) {
            return $this->getSlackTimestamp();
        }

        $this->setSlackTimestamp($slackTimestamp);

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
