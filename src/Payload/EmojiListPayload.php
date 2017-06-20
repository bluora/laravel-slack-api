<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\EmojiListPayload as OriginalEmojiListPayload;
use CL\Slack\Payload\EmojiListPayloadResponse;

class EmojiListPayload extends OriginalEmojiListPayload
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
