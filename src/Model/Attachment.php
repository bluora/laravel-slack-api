<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\Attachment as OriginalAttachment;

class Attachment extends OriginalAttachment
{

    /**
     * Get or set the title.
     *
     * @param mixed $title
     */
    public function title()
    {
        if (func_num_args() == 0) {
            return $this->getTitle();
        }

        $this->setTitle(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the title link.
     *
     * @param mixed $titleLink
     */
    public function titleLink()
    {
        if (func_num_args() == 0) {
            return $this->getTitleLink();
        }

        $this->setTitleLink(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the image url.
     *
     * @param mixed $imageUrl
     */
    public function imageUrl()
    {
        if (func_num_args() == 0) {
            return $this->getImageUrl();
        }

        $this->setImageUrl(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the author name.
     *
     * @param mixed $authorName
     */
    public function authorName()
    {
        if (func_num_args() == 0) {
            return $this->getAuthorName();
        }

        $this->setAuthorName(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the author link.
     *
     * @param mixed $authorLink
     */
    public function authorLink()
    {
        if (func_num_args() == 0) {
            return $this->getAuthorLink();
        }

        $this->setAuthorLink(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the author icon.
     *
     * @param mixed $authorIcon
     */
    public function authorIcon()
    {
        if (func_num_args() == 0) {
            return $this->getAuthorIcon();
        }

        $this->setAuthorIcon(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the fallback.
     *
     * @param mixed $fallback
     */
    public function fallback()
    {
        if (func_num_args() == 0) {
            return $this->getFallback();
        }

        $this->setFallback(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the callback id.
     *
     * @param mixed $callbackId
     */
    public function callbackId()
    {
        if (func_num_args() == 0) {
            return $this->getCallbackId();
        }

        $this->setCallbackId(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the pretext.
     *
     * @param mixed $pretext
     */
    public function pretext()
    {
        if (func_num_args() == 0) {
            return $this->getPretext();
        }

        $this->setPretext(func_get_arg(0));

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
     * Get or set the color.
     *
     * @param mixed $color
     */
    public function color()
    {
        if (func_num_args() == 0) {
            return $this->getColor();
        }

        $this->setColor(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the mrkdwn in.
     *
     * @param mixed $mrkdwnIn
     */
    public function mrkdwnIn()
    {
        if (func_num_args() == 0) {
            return $this->getMrkdwnIn();
        }

        $this->setMrkdwnIn(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the footer.
     *
     * @param mixed $footer
     */
    public function footer()
    {
        if (func_num_args() == 0) {
            return $this->getFooter();
        }

        $this->setFooter(func_get_arg(0));

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
