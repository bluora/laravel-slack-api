<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsArchivePayload as OriginalGroupsArchivePayload;
use CL\Slack\Payload\GroupsArchivePayloadResponse;
use CL\Slack\Transport\ApiClient;

class GroupsArchivePayload extends OriginalGroupsArchivePayload
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
