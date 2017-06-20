<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsOpenPayload as OriginalGroupsOpenPayload;
use CL\Slack\Payload\GroupsOpenPayloadResponse;
use CL\Slack\Transport\ApiClient;

class GroupsOpenPayload extends OriginalGroupsOpenPayload
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
