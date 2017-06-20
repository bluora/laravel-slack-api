<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\EmojiListPayload;
use CL\Slack\Transport\ApiClient;

class EmojiList extends EmojiListPayload
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
     * Send.
     *
     * @return mixed.
     */
    public function send()
    {
        return $this->client->send($this);
    }
}
