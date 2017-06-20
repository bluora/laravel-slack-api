<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsRenamePayload as OriginalGroupsRenamePayload;
use CL\Slack\Payload\GroupsRenamePayloadResponse;
use CL\Slack\Transport\ApiClient;

class GroupsRenamePayload extends OriginalGroupsRenamePayload
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
     * Get or set the name.
     *
     * @param ApiClient $client
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
