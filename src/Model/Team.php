<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\Team as OriginalTeam;

class Team extends OriginalTeam
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
