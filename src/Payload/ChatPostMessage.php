<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\ChatPostMessagePayload;
use CL\Slack\Transport\ApiClient;

class ChatPostMessage extends ChatPostMessagePayload
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
     * Get or set the channel.
     *
     * @param ApiClient $client
     */
    public function channel($channel = false)
    {
        if ($channel === false) {
            return $this->getChannel();
        }

        $this->setChannel($channel);

        return $this;
    }

    /**
     * Get or set the text.
     *
     * @param ApiClient $client
     */
    public function text($text = false)
    {
        if ($text === false) {
            return $this->getText();
        }

        $this->setText($text);

        return $this;
    }

    /**
     * Get or set the message.
     *
     * @param ApiClient $client
     */
    public function message($message = false)
    {
        if ($message === false) {
            return $this->getMessage();
        }

        $this->setMessage($message);

        return $this;
    }

    /**
     * Get or set the username.
     *
     * @param ApiClient $client
     */
    public function username($username = false)
    {
        if ($username === false) {
            return $this->getUsername();
        }

        $this->setUsername($username);

        return $this;
    }

    /**
     * Get or set the as user.
     *
     * @param ApiClient $client
     */
    public function asUser($asUser = false)
    {
        if ($asUser === false) {
            return $this->getAsUser();
        }

        $this->setAsUser($asUser);

        return $this;
    }

    /**
     * Get or set the parse.
     *
     * @param ApiClient $client
     */
    public function parse($parse = false)
    {
        if ($parse === false) {
            return $this->getParse();
        }

        $this->setParse($parse);

        return $this;
    }

    /**
     * Get or set the icon emoji.
     *
     * @param ApiClient $client
     */
    public function iconEmoji($iconEmoji = false)
    {
        if ($iconEmoji === false) {
            return $this->getIconEmoji();
        }

        $this->setIconEmoji($iconEmoji);

        return $this;
    }

    /**
     * Get or set the icon url.
     *
     * @param ApiClient $client
     */
    public function iconUrl($iconUrl = false)
    {
        if ($iconUrl === false) {
            return $this->getIconUrl();
        }

        $this->setIconUrl($iconUrl);

        return $this;
    }

    /**
     * Get or set the unfurl links.
     *
     * @param ApiClient $client
     */
    public function unfurlLinks($unfurlLinks = false)
    {
        if ($unfurlLinks === false) {
            return $this->getUnfurlLinks();
        }

        $this->setUnfurlLinks($unfurlLinks);

        return $this;
    }

    /**
     * Get or set the unfurl media.
     *
     * @param ApiClient $client
     */
    public function unfurlMedia($unfurlMedia = false)
    {
        if ($unfurlMedia === false) {
            return $this->getUnfurlMedia();
        }

        $this->setUnfurlMedia($unfurlMedia);

        return $this;
    }

    /**
     * Get or set the link names.
     *
     * @param ApiClient $client
     */
    public function linkNames($linkNames = false)
    {
        if ($linkNames === false) {
            return $this->getLinkNames();
        }

        $this->setLinkNames($linkNames);

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
