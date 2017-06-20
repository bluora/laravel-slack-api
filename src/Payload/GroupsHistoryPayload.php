<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsHistoryPayload as OriginalGroupsHistoryPayload;
use CL\Slack\Payload\GroupsHistoryPayloadResponse;

class GroupsHistoryPayload extends OriginalGroupsHistoryPayload
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
     * Get or set the latest.
     *
     * @param mixed $latest
     */
    public function latest($latest = false)
    {
        if ($latest === false) {
            return $this->getLatest();
        }

        $this->setLatest($latest);

        return $this;
    }

    /**
     * Get or set the oldest.
     *
     * @param mixed $oldest
     */
    public function oldest($oldest = false)
    {
        if ($oldest === false) {
            return $this->getOldest();
        }

        $this->setOldest($oldest);

        return $this;
    }

    /**
     * Get or set the count.
     *
     * @param mixed $count
     */
    public function count($count = false)
    {
        if ($count === false) {
            return $this->getCount();
        }

        $this->setCount($count);

        return $this;
    }

    /**
     * Get or set the inclusive.
     *
     * @param mixed $inclusive
     */
    public function inclusive($inclusive = false)
    {
        if ($inclusive === false) {
            return $this->getInclusive();
        }

        $this->setInclusive($inclusive);

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
