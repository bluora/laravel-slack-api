<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChatUpdatePayload as OriginalChatUpdatePayload;

class ChatUpdatePayload extends OriginalChatUpdatePayload
{
    /**
     * Get or set the ts.
     *
     * @param mixed $ts
     */
    public function ts()
    {
        if (func_num_args() == 0) {
            return $this->getTs();
        }

        $this->setTs(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the channel id.
     *
     * @param mixed $channelId
     */
    public function channelId()
    {
        if (func_num_args() == 0) {
            return $this->getChannelId();
        }

        $this->setChannelId(func_get_arg(0));

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
