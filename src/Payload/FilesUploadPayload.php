<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\FilesUploadPayload as OriginalFilesUploadPayload;

class FilesUploadPayload extends OriginalFilesUploadPayload
{
    /**
     * Get or set the file.
     *
     * @param mixed $file
     */
    public function file()
    {
        if (func_num_args() == 0) {
            return $this->getFile();
        }

        $this->setFile(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the filename.
     *
     * @param mixed $filename
     */
    public function filename()
    {
        if (func_num_args() == 0) {
            return $this->getFilename();
        }

        $this->setFilename(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the file type.
     *
     * @param mixed $fileType
     */
    public function fileType()
    {
        if (func_num_args() == 0) {
            return $this->getFileType();
        }

        $this->setFileType(func_get_arg(0));

        return $this;
    }

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
     * Get or set the content.
     *
     * @param mixed $content
     */
    public function content()
    {
        if (func_num_args() == 0) {
            return $this->getContent();
        }

        $this->setContent(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the channels.
     *
     * @param mixed $channels
     */
    public function channels()
    {
        if (func_num_args() == 0) {
            return $this->getChannels();
        }

        $this->setChannels(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the channels from string.
     *
     * @param mixed $channelsFromString
     */
    public function channelsFromString()
    {
        if (func_num_args() == 0) {
            return $this->getChannelsFromString();
        }

        $this->setChannelsFromString(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the initial comment.
     *
     * @param mixed $initialComment
     */
    public function initialComment()
    {
        if (func_num_args() == 0) {
            return $this->getInitialComment();
        }

        $this->setInitialComment(func_get_arg(0));

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
