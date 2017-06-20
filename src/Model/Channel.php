<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\Channel as OriginalChannel;

class Channel extends OriginalChannel
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
