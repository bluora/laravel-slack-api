<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\Message as OriginalMessage;

class Message extends OriginalMessage
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
