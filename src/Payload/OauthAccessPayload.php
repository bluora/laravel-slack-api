<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\OauthAccessPayload as OriginalOauthAccessPayload;
use CL\Slack\Payload\OauthAccessPayloadResponse;

class OauthAccessPayload extends OriginalOauthAccessPayload
{

    /**
     * Get or set the client id.
     *
     * @param mixed $clientId
     */
    public function clientId($clientId = false)
    {
        if ($clientId === false) {
            return $this->getClientId();
        }

        $this->setClientId($clientId);

        return $this;
    }

    /**
     * Get or set the client secret.
     *
     * @param mixed $clientSecret
     */
    public function clientSecret($clientSecret = false)
    {
        if ($clientSecret === false) {
            return $this->getClientSecret();
        }

        $this->setClientSecret($clientSecret);

        return $this;
    }

    /**
     * Get or set the code.
     *
     * @param mixed $code
     */
    public function code($code = false)
    {
        if ($code === false) {
            return $this->getCode();
        }

        $this->setCode($code);

        return $this;
    }

    /**
     * Get or set the redirect uri.
     *
     * @param mixed $redirectUri
     */
    public function redirectUri($redirectUri = false)
    {
        if ($redirectUri === false) {
            return $this->getRedirectUri();
        }

        $this->setRedirectUri($redirectUri);

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
