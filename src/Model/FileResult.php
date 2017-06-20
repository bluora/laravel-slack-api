<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\FileResult as OriginalFileResult;

class FileResult extends OriginalFileResult
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
