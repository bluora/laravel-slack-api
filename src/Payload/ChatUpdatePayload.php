<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChatUpdatePayload as OriginalChatUpdatePayload;
use CL\Slack\Payload\ChatUpdatePayloadResponse;

class ChatUpdatePayload extends OriginalChatUpdatePayload
{

    /**
     * Get or set the channel id.
     *
     * @param mixed $channelId
     */
    public function channelId($channelId = false)
    {
        if ($channelId === false) {
            return $this->getChannelId();
        }

        $this->setChannelId($channelId);

        return $this;
    }

    /**
     * Get or set the slack timestamp.
     *
     * @param mixed $slackTimestamp
     */
    public function slackTimestamp($slackTimestamp = false)
    {
        if ($slackTimestamp === false) {
            return $this->getSlackTimestamp();
        }

        $this->setSlackTimestamp($slackTimestamp);

        return $this;
    }

    /**
     * Get or set the text.
     *
     * @param mixed $text
     */
    public function text($text = false)
    {
        if ($text === false) {
            return $this->getText();
        }

        $this->setText($text);

        return $this;
    }

    /**
     * Get or set the message.
     *
     * @param mixed $message
     */
    public function message($message = false)
    {
        if ($message === false) {
            return $this->getMessage();
        }

        $this->setMessage($message);

        return $this;
    }

    /**
     * Get or set the parse.
     *
     * @param mixed $parse
     */
    public function parse($parse = false)
    {
        if ($parse === false) {
            return $this->getParse();
        }

        $this->setParse($parse);

        return $this;
    }

    /**
     * Get or set the link names.
     *
     * @param mixed $linkNames
     */
    public function linkNames($linkNames = false)
    {
        if ($linkNames === false) {
            return $this->getLinkNames();
        }

        $this->setLinkNames($linkNames);

        return $this;
    }

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
