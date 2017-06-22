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
    public function userId()
    {
        if (func_num_args() == 0) {
            return $this->getUserId();
        }

        $this->setUserId(func_get_arg(0));

        return $this;
    }

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

        return $app['bluora.slackapi']->send($this);
    }
}
