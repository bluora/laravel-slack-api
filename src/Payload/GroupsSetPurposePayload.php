<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsSetPurposePayload as OriginalGroupsSetPurposePayload;
use CL\Slack\Payload\GroupsSetPurposePayloadResponse;
use CL\Slack\Transport\ApiClient;

class GroupsSetPurposePayload extends OriginalGroupsSetPurposePayload
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
     * Get or set the purpose.
     *
     * @param ApiClient $client
     */
    public function purpose($purpose = false)
    {
        if ($purpose === false) {
            return $this->getPurpose();
        }

        $this->setPurpose($purpose);

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
