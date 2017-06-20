<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\Customizable as OriginalCustomizable;

class Customizable extends OriginalCustomizable
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
