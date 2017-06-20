<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\User as OriginalUser;

class User extends OriginalUser
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
