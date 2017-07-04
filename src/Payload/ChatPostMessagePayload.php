<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChatPostMessagePayload as OriginalChatPostMessagePayload;

class ChatPostMessagePayload extends OriginalChatPostMessagePayload
{
    /**
     * Get or set the channel.
     *
     * @param mixed $channel
     */
    public function channel()
    {
        if (func_num_args() == 0) {
            return $this->getChannel();
        }

        $this->setChannel(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the text.
     *
     * @param mixed $text
     */
    public function text()
    {
        if (func_num_args() == 0) {
            return $this->getText();
        }

        $this->setText(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the parse.
     *
     * @param mixed $parse
     */
    public function parse()
    {
        if (func_num_args() == 0) {
            return $this->getParse();
        }

        $this->setParse(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the link names.
     *
     * @param mixed $linkNames
     */
    public function linkNames()
    {
        if (func_num_args() == 0) {
            return $this->getLinkNames();
        }

        $this->setLinkNames(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the unfurl links.
     *
     * @param mixed $unfurlLinks
     */
    public function unfurlLinks()
    {
        if (func_num_args() == 0) {
            return $this->getUnfurlLinks();
        }

        $this->setUnfurlLinks(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the unfurl media.
     *
     * @param mixed $unfurlMedia
     */
    public function unfurlMedia()
    {
        if (func_num_args() == 0) {
            return $this->getUnfurlMedia();
        }

        $this->setUnfurlMedia(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the username.
     *
     * @param mixed $username
     */
    public function username()
    {
        if (func_num_args() == 0) {
            return $this->getUsername();
        }

        $this->setUsername(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the as user.
     *
     * @param mixed $asUser
     */
    public function asUser()
    {
        if (func_num_args() == 0) {
            return $this->getAsUser();
        }

        $this->setAsUser(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the icon url.
     *
     * @param mixed $iconUrl
     */
    public function iconUrl()
    {
        if (func_num_args() == 0) {
            return $this->getIconUrl();
        }

        $this->setIconUrl(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the icon emoji.
     *
     * @param mixed $iconEmoji
     */
    public function iconEmoji()
    {
        if (func_num_args() == 0) {
            return $this->getIconEmoji();
        }

        $this->setIconEmoji(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the thread ts.
     *
     * @param mixed $threadTs
     */
    public function threadTs()
    {
        if (func_num_args() == 0) {
            return $this->getThreadTs();
        }

        $this->setThreadTs(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the reply broadcast.
     *
     * @param mixed $replyBroadcast
     */
    public function replyBroadcast()
    {
        if (func_num_args() == 0) {
            return $this->getReplyBroadcast();
        }

        $this->setReplyBroadcast(func_get_arg(0));

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

        if (func_num_args() == 1) {
            $app['bluora.slackapi']->accessToken(func_get_arg(0));
        }

        return $app['bluora.slackapi']->send($this);
    }
}
