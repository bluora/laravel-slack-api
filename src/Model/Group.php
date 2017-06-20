<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\Group as OriginalGroup;

class Group extends OriginalGroup
{

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
