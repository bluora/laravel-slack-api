<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\SimpleChannel as OriginalSimpleChannel;

class SimpleChannel extends OriginalSimpleChannel
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
