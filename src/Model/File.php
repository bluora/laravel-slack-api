<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\File as OriginalFile;

class File extends OriginalFile
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
