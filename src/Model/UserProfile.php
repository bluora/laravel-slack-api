<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\UserProfile as OriginalUserProfile;

class UserProfile extends OriginalUserProfile
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
