<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsClosePayload as OriginalGroupsClosePayload;
use CL\Slack\Payload\GroupsClosePayloadResponse;
use CL\Slack\Transport\ApiClient;

class GroupsClosePayload extends OriginalGroupsClosePayload
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
