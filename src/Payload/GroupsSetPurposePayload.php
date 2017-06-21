<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsSetPurposePayload as OriginalGroupsSetPurposePayload;
use CL\Slack\Payload\GroupsSetPurposePayloadResponse;

class GroupsSetPurposePayload extends OriginalGroupsSetPurposePayload
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
     * Get or set the purpose.
     *
     * @param mixed $purpose
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
