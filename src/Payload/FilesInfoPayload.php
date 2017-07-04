<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\FilesInfoPayload as OriginalFilesInfoPayload;

class FilesInfoPayload extends OriginalFilesInfoPayload
{
    /**
     * Get or set the count.
     *
     * @param mixed $count
     */
    public function count()
    {
        if (func_num_args() == 0) {
            return $this->getCount();
        }

        $this->setCount(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the file id.
     *
     * @param mixed $fileId
     */
    public function fileId()
    {
        if (func_num_args() == 0) {
            return $this->getFileId();
        }

        $this->setFileId(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the page.
     *
     * @param mixed $page
     */
    public function page()
    {
        if (func_num_args() == 0) {
            return $this->getPage();
        }

        $this->setPage(func_get_arg(0));

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
