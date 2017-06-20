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
    public function title($title = false)
    {
        if ($title === false) {
            return $this->getTitle();
        }

        $this->setTitle($title);

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
     * Get or set the short.
     *
     * @param mixed $short
     */
    public function short($short = false)
    {
        if ($short === false) {
            return $this->getShort();
        }

        $this->setShort($short);

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
