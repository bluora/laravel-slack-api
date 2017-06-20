<?php

namespace Bluora\LaravelSlackApi;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * The actual provider.
     *
     * @var \Illuminate\Support\ServiceProvider
     */
    protected $provider;

    /**
     * Instantiate the service provider.
     *
     * @param mixed $app
     *
     * @return void
     */
    public function __construct($app)
    {
        parent::__construct($app);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'slack-api');

        $this->app->singleton('bluora.slackapi', function ($app) {
            return new Slack($app['config']->get('slack-api.access_token'));
        });

        $this->app->bind('Bluora\LaravelSlackApi\Slack', 'bluora.slackapi');
    }

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('slack-api.php'),
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['bluora.slackapi'];
    }
}
