<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\ActionConfirm as OriginalActionConfirm;

class ActionConfirm extends OriginalActionConfirm
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
     * Get or set the ok text.
     *
     * @param mixed $okText
     */
    public function okText($okText = false)
    {
        if ($okText === false) {
            return $this->getOkText();
        }

        $this->setOkText($okText);

        return $this;
    }

    /**
     * Get or set the dismiss text.
     *
     * @param mixed $dismissText
     */
    public function dismissText($dismissText = false)
    {
        if ($dismissText === false) {
            return $this->getDismissText();
        }

        $this->setDismissText($dismissText);

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
