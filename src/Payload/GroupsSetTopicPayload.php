<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\GroupsSetTopicPayload as OriginalGroupsSetTopicPayload;
use CL\Slack\Payload\GroupsSetTopicPayloadResponse;

class GroupsSetTopicPayload extends OriginalGroupsSetTopicPayload
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
     * Get or set the topic.
     *
     * @param mixed $topic
     */
    public function topic($topic = false)
    {
        if ($topic === false) {
            return $this->getTopic();
        }

        $this->setTopic($topic);

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
