<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\FilesListPayload as OriginalFilesListPayload;
use CL\Slack\Payload\FilesListPayloadResponse;

class FilesListPayload extends OriginalFilesListPayload
{

    /**
     * Get or set the user id.
     *
     * @param mixed $userId
     */
    public function userId($userId = false)
    {
        if ($userId === false) {
            return $this->getUserId();
        }

        $this->setUserId($userId);

        return $this;
    }

    /**
     * Get or set the timestamp from.
     *
     * @param mixed $timestampFrom
     */
    public function timestampFrom($timestampFrom = false)
    {
        if ($timestampFrom === false) {
            return $this->getTimestampFrom();
        }

        $this->setTimestampFrom($timestampFrom);

        return $this;
    }

    /**
     * Get or set the timestamp to.
     *
     * @param mixed $timestampTo
     */
    public function timestampTo($timestampTo = false)
    {
        if ($timestampTo === false) {
            return $this->getTimestampTo();
        }

        $this->setTimestampTo($timestampTo);

        return $this;
    }

    /**
     * Get or set the count.
     *
     * @param mixed $count
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
     * Get or set the page.
     *
     * @param mixed $page
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
     * Get or set the types.
     *
     * @param mixed $types
     */
    public function types($types = false)
    {
        if ($types === false) {
            return $this->getTypes();
        }

        $this->setTypes($types);

        return $this;
    }

    /**
     * Get or set the types from string.
     *
     * @param mixed $typesFromString
     */
    public function typesFromString($typesFromString = false)
    {
        if ($typesFromString === false) {
            return $this->getTypesFromString();
        }

        $this->setTypesFromString($typesFromString);

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
