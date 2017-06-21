<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\EmojiListPayload as OriginalEmojiListPayload;
use CL\Slack\Payload\EmojiListPayloadResponse;

class EmojiListPayload extends OriginalEmojiListPayload
{

    /**
     * Set the endpoint.
     *
     * @return mixed.
     */
    public function endpoint($endpoint)
    {
        global $app;

        $app['bluora.slackapi']->endpoint($endpoint);

        return $this;
    }

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
