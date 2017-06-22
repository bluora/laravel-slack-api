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
    public function title()
    {
        if (func_num_args() == 0) {
            return $this->getTitle();
        }

        $this->setTitle(func_get_arg(0));

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
     * Get or set the ok text.
     *
     * @param mixed $okText
     */
    public function okText()
    {
        if (func_num_args() == 0) {
            return $this->getOkText();
        }

        $this->setOkText(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the dismiss text.
     *
     * @param mixed $dismissText
     */
    public function dismissText()
    {
        if (func_num_args() == 0) {
            return $this->getDismissText();
        }

        $this->setDismissText(func_get_arg(0));

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
