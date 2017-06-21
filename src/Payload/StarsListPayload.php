<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\StarsListPayload as OriginalStarsListPayload;
use CL\Slack\Payload\StarsListPayloadResponse;

class StarsListPayload extends OriginalStarsListPayload
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
