<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\SimpleMessage as OriginalSimpleMessage;

class SimpleMessage extends OriginalSimpleMessage
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
