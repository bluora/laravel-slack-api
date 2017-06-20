<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\StarsListPayload as OriginalStarsListPayload;
use CL\Slack\Payload\StarsListPayloadResponse;
use CL\Slack\Transport\ApiClient;

class StarsListPayload extends OriginalStarsListPayload
{

    /**
     * Get or set the user id.
     *
     * @param ApiClient $client
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
