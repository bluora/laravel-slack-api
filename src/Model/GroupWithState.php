<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\GroupWithState as OriginalGroupWithState;

class GroupWithState extends OriginalGroupWithState
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
