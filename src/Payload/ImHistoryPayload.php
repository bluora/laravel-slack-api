<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ImHistoryPayload as OriginalImHistoryPayload;
use CL\Slack\Payload\ImHistoryPayloadResponse;

class ImHistoryPayload extends OriginalImHistoryPayload
{

    /**
     * Get or set the im id.
     *
     * @param mixed $imId
     */
    public function imId($imId = false)
    {
        if ($imId === false) {
            return $this->getImId();
        }

        $this->setImId($imId);

        return $this;
    }

    /**
     * Get or set the latest.
     *
     * @param mixed $latest
     */
    public function latest($latest = false)
    {
        if ($latest === false) {
            return $this->getLatest();
        }

        $this->setLatest($latest);

        return $this;
    }

    /**
     * Get or set the oldest.
     *
     * @param mixed $oldest
     */
    public function oldest($oldest = false)
    {
        if ($oldest === false) {
            return $this->getOldest();
        }

        $this->setOldest($oldest);

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
     * Get or set the inclusive.
     *
     * @param mixed $inclusive
     */
    public function inclusive($inclusive = false)
    {
        if ($inclusive === false) {
            return $this->getInclusive();
        }

        $this->setInclusive($inclusive);

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
