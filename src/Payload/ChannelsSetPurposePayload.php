<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChannelsSetPurposePayload as OriginalChannelsSetPurposePayload;
use CL\Slack\Payload\ChannelsSetPurposePayloadResponse;
use CL\Slack\Transport\ApiClient;

class ChannelsSetPurposePayload extends OriginalChannelsSetPurposePayload
{

    /**
     * Get or set the channel id.
     *
     * @param ApiClient $client
     */
    public function channelId($channelId = false)
    {
        if ($channelId === false) {
            return $this->getChannelId();
        }

        $this->setChannelId($channelId);

        return $this;
    }

    /**
     * Get or set the purpose.
     *
     * @param ApiClient $client
     */
    public function purpose($purpose = false)
    {
        if ($purpose === false) {
            return $this->getPurpose();
        }

        $this->setPurpose($purpose);

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
