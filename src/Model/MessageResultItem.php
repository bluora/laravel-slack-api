<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\MessageResultItem as OriginalMessageResultItem;

class MessageResultItem extends OriginalMessageResultItem
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
