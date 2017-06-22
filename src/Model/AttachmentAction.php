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
    public function name()
    {
        if (func_num_args() == 0) {
            return $this->getName();
        }

        $this->setName(func_get_arg(0));

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
     * Get or set the style.
     *
     * @param mixed $style
     */
    public function style()
    {
        if (func_num_args() == 0) {
            return $this->getStyle();
        }

        $this->setStyle(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the type.
     *
     * @param mixed $type
     */
    public function type()
    {
        if (func_num_args() == 0) {
            return $this->getType();
        }

        $this->setType(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the value.
     *
     * @param mixed $value
     */
    public function value()
    {
        if (func_num_args() == 0) {
            return $this->getValue();
        }

        $this->setValue(func_get_arg(0));

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
