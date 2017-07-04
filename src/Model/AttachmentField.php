<?php

namespace Bluora\LaravelSlackApi\Model;

use CL\Slack\Model\AttachmentField as OriginalAttachmentField;

class AttachmentField extends OriginalAttachmentField
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
     * Get or set the short.
     *
     * @param mixed $short
     */
    public function short()
    {
        if (func_num_args() == 0) {
            return $this->getShort();
        }

        $this->setShort(func_get_arg(0));

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
