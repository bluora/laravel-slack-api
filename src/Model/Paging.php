<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\Paging as OriginalPaging;

class Paging extends OriginalPaging
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
