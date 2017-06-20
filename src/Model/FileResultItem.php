<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\FileResultItem as OriginalFileResultItem;

class FileResultItem extends OriginalFileResultItem
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
