<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\FilesInfoPayload as OriginalFilesInfoPayload;
use CL\Slack\Payload\FilesInfoPayloadResponse;
use CL\Slack\Transport\ApiClient;

class FilesInfoPayload extends OriginalFilesInfoPayload
{

    /**
     * Get or set the count.
     *
     * @param ApiClient $client
     */
    public function count($count = false)
    {
        if ($count === false) {
            return $this->getCount();
        }

        $this->setCount($count);

        return $this;
    }

    /**
     * Get or set the file id.
     *
     * @param ApiClient $client
     */
    public function fileId($fileId = false)
    {
        if ($fileId === false) {
            return $this->getFileId();
        }

        $this->setFileId($fileId);

        return $this;
    }

    /**
     * Get or set the page.
     *
     * @param ApiClient $client
     */
    public function page($page = false)
    {
        if ($page === false) {
            return $this->getPage();
        }

        $this->setPage($page);

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
