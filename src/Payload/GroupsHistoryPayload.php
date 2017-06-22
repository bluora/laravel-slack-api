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
    public function groupId()
    {
        if (func_num_args() == 0) {
            return $this->getGroupId();
        }

        $this->setGroupId(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the latest.
     *
     * @param mixed $latest
     */
    public function latest()
    {
        if (func_num_args() == 0) {
            return $this->getLatest();
        }

        $this->setLatest(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the oldest.
     *
     * @param mixed $oldest
     */
    public function oldest()
    {
        if (func_num_args() == 0) {
            return $this->getOldest();
        }

        $this->setOldest(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the count.
     *
     * @param mixed $count
     */
    public function count()
    {
        if (func_num_args() == 0) {
            return $this->getCount();
        }

        $this->setCount(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the inclusive.
     *
     * @param mixed $inclusive
     */
    public function inclusive()
    {
        if (func_num_args() == 0) {
            return $this->getInclusive();
        }

        $this->setInclusive(func_get_arg(0));

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
