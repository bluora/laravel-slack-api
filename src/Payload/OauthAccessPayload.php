<?php

namespace Bluora\LaravelSlackApi\Payload;

use CL\Slack\Payload\OauthAccessPayload as OriginalOauthAccessPayload;

class OauthAccessPayload extends OriginalOauthAccessPayload
{
    /**
     * Get or set the client id.
     *
     * @param mixed $clientId
     */
    public function clientId()
    {
        if (func_num_args() == 0) {
            return $this->getClientId();
        }

        $this->setClientId(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the client secret.
     *
     * @param mixed $clientSecret
     */
    public function clientSecret()
    {
        if (func_num_args() == 0) {
            return $this->getClientSecret();
        }

        $this->setClientSecret(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the code.
     *
     * @param mixed $code
     */
    public function code()
    {
        if (func_num_args() == 0) {
            return $this->getCode();
        }

        $this->setCode(func_get_arg(0));

        return $this;
    }

    /**
     * Get or set the redirect uri.
     *
     * @param mixed $redirectUri
     */
    public function redirectUri()
    {
        if (func_num_args() == 0) {
            return $this->getRedirectUri();
        }

        $this->setRedirectUri(func_get_arg(0));

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
