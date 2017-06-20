<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsInfoPayload as OriginalGroupsInfoPayload;
use CL\Slack\Payload\GroupsInfoPayloadResponse;
use CL\Slack\Transport\ApiClient;

class GroupsInfoPayload extends OriginalGroupsInfoPayload
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
