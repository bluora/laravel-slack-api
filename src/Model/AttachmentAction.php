<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\AttachmentAction as OriginalAttachmentAction;

class AttachmentAction extends OriginalAttachmentAction
{

    /**
     * Get or set the name.
     *
     * @param mixed $name
     */
    public function name($name = false)
    {
        if ($name === false) {
            return $this->getName();
        }

        $this->setName($name);

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
     * Get or set the style.
     *
     * @param mixed $style
     */
    public function style($style = false)
    {
        if ($style === false) {
            return $this->getStyle();
        }

        $this->setStyle($style);

        return $this;
    }

    /**
     * Get or set the type.
     *
     * @param mixed $type
     */
    public function type($type = false)
    {
        if ($type === false) {
            return $this->getType();
        }

        $this->setType($type);

        return $this;
    }

    /**
     * Get or set the value.
     *
     * @param mixed $value
     */
    public function value($value = false)
    {
        if ($value === false) {
            return $this->getValue();
        }

        $this->setValue($value);

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
