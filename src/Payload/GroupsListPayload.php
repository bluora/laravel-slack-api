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
    public function excludeArchived()
    {
        if (func_num_args() == 0) {
            return $this->getExcludeArchived();
        }

        $this->setExcludeArchived(func_get_arg(0));

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
