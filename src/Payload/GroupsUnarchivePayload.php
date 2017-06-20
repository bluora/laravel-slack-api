<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsUnarchivePayload as OriginalGroupsUnarchivePayload;
use CL\Slack\Payload\GroupsUnarchivePayloadResponse;
use CL\Slack\Transport\ApiClient;

class GroupsUnarchivePayload extends OriginalGroupsUnarchivePayload
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
