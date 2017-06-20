<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\MessageResult as OriginalMessageResult;

class MessageResult extends OriginalMessageResult
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
