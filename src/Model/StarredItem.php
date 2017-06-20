<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\StarredItem as OriginalStarredItem;

class StarredItem extends OriginalStarredItem
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
