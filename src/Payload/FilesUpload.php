<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\FilesUploadPayload;
use CL\Slack\Transport\ApiClient;

class FilesUpload extends FilesUploadPayload
{
    protected $client;

    /**
     * Set the client.
     *
     * @param ApiClient $client
     */
    public function setClient(ApiClient &$client)
    {
        $this->client($client);

        return $this;
    }

    /**
     * Get or set the file.
     *
     * @param ApiClient $client
     */
    public function file($file = false)
    {
        if ($file === false) {
            return $this->getFile();
        }

        $this->setFile($file);

        return $this;
    }

    /**
     * Get or set the filename.
     *
     * @param ApiClient $client
     */
    public function filename($filename = false)
    {
        if ($filename === false) {
            return $this->getFilename();
        }

        $this->setFilename($filename);

        return $this;
    }

    /**
     * Get or set the file type.
     *
     * @param ApiClient $client
     */
    public function fileType($fileType = false)
    {
        if ($fileType === false) {
            return $this->getFileType();
        }

        $this->setFileType($fileType);

        return $this;
    }

    /**
     * Get or set the title.
     *
     * @param ApiClient $client
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
     * Get or set the content.
     *
     * @param ApiClient $client
     */
    public function content($content = false)
    {
        if ($content === false) {
            return $this->getContent();
        }

        $this->setContent($content);

        return $this;
    }

    /**
     * Get or set the channels.
     *
     * @param ApiClient $client
     */
    public function channels($channels = false)
    {
        if ($channels === false) {
            return $this->getChannels();
        }

        $this->setChannels($channels);

        return $this;
    }

    /**
     * Get or set the channels from string.
     *
     * @param ApiClient $client
     */
    public function channelsFromString($channelsFromString = false)
    {
        if ($channelsFromString === false) {
            return $this->getChannelsFromString();
        }

        $this->setChannelsFromString($channelsFromString);

        return $this;
    }

    /**
     * Get or set the initial comment.
     *
     * @param ApiClient $client
     */
    public function initialComment($initialComment = false)
    {
        if ($initialComment === false) {
            return $this->getInitialComment();
        }

        $this->setInitialComment($initialComment);

        return $this;
    }

    /**
     * Send.
     *
     * @return mixed.
     */
    public function send()
    {
        return $this->client->send($this);
    }
}
