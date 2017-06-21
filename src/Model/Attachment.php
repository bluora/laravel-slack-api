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
    public function title($title = false)
    {
        if ($title === false) {
            return $this->getTitle();
        }

        $this->setTitle($title);

        return $this;
    }

    /**
     * Get or set the title link.
     *
     * @param mixed $titleLink
     */
    public function titleLink($titleLink = false)
    {
        if ($titleLink === false) {
            return $this->getTitleLink();
        }

        $this->setTitleLink($titleLink);

        return $this;
    }

    /**
     * Get or set the image url.
     *
     * @param mixed $imageUrl
     */
    public function imageUrl($imageUrl = false)
    {
        if ($imageUrl === false) {
            return $this->getImageUrl();
        }

        $this->setImageUrl($imageUrl);

        return $this;
    }

    /**
     * Get or set the author name.
     *
     * @param mixed $authorName
     */
    public function authorName($authorName = false)
    {
        if ($authorName === false) {
            return $this->getAuthorName();
        }

        $this->setAuthorName($authorName);

        return $this;
    }

    /**
     * Get or set the author link.
     *
     * @param mixed $authorLink
     */
    public function authorLink($authorLink = false)
    {
        if ($authorLink === false) {
            return $this->getAuthorLink();
        }

        $this->setAuthorLink($authorLink);

        return $this;
    }

    /**
     * Get or set the author icon.
     *
     * @param mixed $authorIcon
     */
    public function authorIcon($authorIcon = false)
    {
        if ($authorIcon === false) {
            return $this->getAuthorIcon();
        }

        $this->setAuthorIcon($authorIcon);

        return $this;
    }

    /**
     * Get or set the fallback.
     *
     * @param mixed $fallback
     */
    public function fallback($fallback = false)
    {
        if ($fallback === false) {
            return $this->getFallback();
        }

        $this->setFallback($fallback);

        return $this;
    }

    /**
     * Get or set the callback id.
     *
     * @param mixed $callbackId
     */
    public function callbackId($callbackId = false)
    {
        if ($callbackId === false) {
            return $this->getCallbackId();
        }

        $this->setCallbackId($callbackId);

        return $this;
    }

    /**
     * Get or set the pretext.
     *
     * @param mixed $pretext
     */
    public function pretext($pretext = false)
    {
        if ($pretext === false) {
            return $this->getPretext();
        }

        $this->setPretext($pretext);

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
     * Get or set the color.
     *
     * @param mixed $color
     */
    public function color($color = false)
    {
        if ($color === false) {
            return $this->getColor();
        }

        $this->setColor($color);

        return $this;
    }

    /**
     * Get or set the mrkdwn in.
     *
     * @param mixed $mrkdwnIn
     */
    public function mrkdwnIn($mrkdwnIn = false)
    {
        if ($mrkdwnIn === false) {
            return $this->getMrkdwnIn();
        }

        $this->setMrkdwnIn($mrkdwnIn);

        return $this;
    }

    /**
     * Get or set the footer.
     *
     * @param mixed $footer
     */
    public function footer($footer = false)
    {
        if ($footer === false) {
            return $this->getFooter();
        }

        $this->setFooter($footer);

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
