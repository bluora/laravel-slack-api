<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\TeamInfoPayload as OriginalTeamInfoPayload;
use CL\Slack\Payload\TeamInfoPayloadResponse;
use CL\Slack\Transport\ApiClient;

class TeamInfoPayload extends OriginalTeamInfoPayload
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
