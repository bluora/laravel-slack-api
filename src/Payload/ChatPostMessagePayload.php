<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChatPostMessagePayload as OriginalChatPostMessagePayload;
use CL\Slack\Payload\ChatPostMessagePayloadResponse;

class ChatPostMessagePayload extends OriginalChatPostMessagePayload
{

    /**
     * Get or set the channel.
     *
     * @param mixed $channel
     */
    public function channel($channel = false)
    {
        if ($channel === false) {
            return $this->getChannel();
        }

        $this->setChannel($channel);

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
     * Get or set the username.
     *
     * @param mixed $username
     */
    public function username($username = false)
    {
        if ($username === false) {
            return $this->getUsername();
        }

        $this->setUsername($username);

        return $this;
    }

    /**
     * Get or set the as user.
     *
     * @param mixed $asUser
     */
    public function asUser($asUser = false)
    {
        if ($asUser === false) {
            return $this->getAsUser();
        }

        $this->setAsUser($asUser);

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
     * Get or set the icon emoji.
     *
     * @param mixed $iconEmoji
     */
    public function iconEmoji($iconEmoji = false)
    {
        if ($iconEmoji === false) {
            return $this->getIconEmoji();
        }

        $this->setIconEmoji($iconEmoji);

        return $this;
    }

    /**
     * Get or set the icon url.
     *
     * @param mixed $iconUrl
     */
    public function iconUrl($iconUrl = false)
    {
        if ($iconUrl === false) {
            return $this->getIconUrl();
        }

        $this->setIconUrl($iconUrl);

        return $this;
    }

    /**
     * Get or set the unfurl links.
     *
     * @param mixed $unfurlLinks
     */
    public function unfurlLinks($unfurlLinks = false)
    {
        if ($unfurlLinks === false) {
            return $this->getUnfurlLinks();
        }

        $this->setUnfurlLinks($unfurlLinks);

        return $this;
    }

    /**
     * Get or set the unfurl media.
     *
     * @param mixed $unfurlMedia
     */
    public function unfurlMedia($unfurlMedia = false)
    {
        if ($unfurlMedia === false) {
            return $this->getUnfurlMedia();
        }

        $this->setUnfurlMedia($unfurlMedia);

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
