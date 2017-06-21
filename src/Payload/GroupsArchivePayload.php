<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsArchivePayload as OriginalGroupsArchivePayload;
use CL\Slack\Payload\GroupsArchivePayloadResponse;

class GroupsArchivePayload extends OriginalGroupsArchivePayload
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
