<?php

namespace Bluora\LaravelSlackApi;

use CL\Slack\Transport\ApiClient;

class SlackApi
{
    protected $client;
    protected $token;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct()
    {
        return $this->setAccessToken(env('SLACK_JONNEE_ACCESS_TOKEN'));
    }

    /**
     * Set or get the access token.
     *
     * @param string $token
     *
     * @return Slack
     */
    public function accessToken($token = false)
    {
        if ($token === false) {
            return $this->getAccessToken();
        }

        return $this->setAccessToken($token);
    }

    /**
     * Get the access token.
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->token;
    }

    /**
     * Get the access token.
     *
     * @param string $token
     *
     * @return string
     */
    public function setAccessToken($token)
    {
        $this->token = $token;
        $this->client = new ApiClient($this->token);

        return $this;
    }

    /**
     * Add request closure.
     * 
     * @param Closure $closure
     *
     * @return void
     */
    public function addRequestListener($closure)
    {
        $this->client->addRequestListener($closure);

        return $this;
    }

    /**
     * Add response closure
     * 
     * @param Closure $closure
     *
     * @return void
     */
    public function addResponseListener($closure)
    {
        $this->client->addResponseListener($closure);

        return $this;
    }

    /**
     * Capture all calls.
     *
     * @param  [type] $method_name
     * @param  [type] $arguments
     *
     * @return mixed
     */
    public function __call($method_name, $arguments)
    {
        $class_name = 'Bluora\\LaravelSlackApi\\Payload\\'.ucfirst($method_name).'Payload';

        if (class_exists($class_name)) {
            return (new $class_name());
        }

        throw new \Exception('That payload does not exist.');
    }

    /**
     * Send the payload.
     *
     * @param mixed $payload
     *
     * @return mixed
     */
    public function send($payload)
    {
        return $this->client->send($payload);
    }
}
