<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\ImChannel as OriginalImChannel;

class ImChannel extends OriginalImChannel
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
