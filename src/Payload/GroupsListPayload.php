<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsListPayload as OriginalGroupsListPayload;
use CL\Slack\Payload\GroupsListPayloadResponse;

class GroupsListPayload extends OriginalGroupsListPayload
{

    /**
     * Get or set the exclude archived.
     *
     * @param mixed $excludeArchived
     */
    public function excludeArchived($excludeArchived = false)
    {
        if ($excludeArchived === false) {
            return $this->getExcludeArchived();
        }

        $this->setExcludeArchived($excludeArchived);

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
