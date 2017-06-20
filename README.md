```
   _____ _            _           __             _                               _ 
  / ____| |          | |         / _|           | |                             | |
 | (___ | | __ _  ___| | __     | |_ ___  _ __  | |     __ _ _ __ __ ___   _____| |
  \___ \| |/ _` |/ __| |/ /     |  _/ _ \| '__| | |    / _` | '__/ _` \ \ / / _ \ |
  ____) | | (_| | (__|   <      | || (_) | |    | |___| (_| | | | (_| |\ V /  __/ |
 |_____/|_|\__,_|\___|_|\_\ API |_| \___/|_|    |______\__,_|_|  \__,_| \_/ \___|_|
                                                                               
```
Provides [Slack](https://github.com/cleentfaar/slack) for Laravel.

[![Latest Stable Version](https://poser.pugx.org/bluora/laravel-slack-api/v/stable.svg)](https://packagist.org/packages/bluora/laravel-slack) [![Total Downloads](https://poser.pugx.org/bluora/laravel-slack-api/downloads.svg)](https://packagist.org/packages/bluora/laravel-slack) [![Latest Unstable Version](https://poser.pugx.org/bluora/laravel-slack-api/v/unstable.svg)](https://packagist.org/packages/bluora/laravel-slack) [![Built for Laravel](https://img.shields.io/badge/Built_for-Laravel-green.svg)](https://laravel.com/) [![License](https://poser.pugx.org/bluora/laravel-slack-api/license.svg)](https://packagist.org/packages/bluora/laravel-slack)

[![StyleCI](https://styleci.io/repos/x/shield?branch=master)](https://styleci.io/repos/x) [![Issue Count](https://codeclimate.com/github/bluora/laravel-slack-api/badges/issue_count.svg)](https://codeclimate.com/github/bluora/laravel-slack) [![Code Climate](https://codeclimate.com/github/bluora/laravel-slack-api/badges/gpa.svg)](https://codeclimate.com/github/bluora/laravel-slack) 

This package has been developed by H&H|Digital, an Australian botique developer. Visit us at [hnh.digital](http://hnh.digital).


## Install

Via composer:

`$ composer require bluora/laravel-slack dev-master`

Enable the service provider by editing config/app.php:

```php
    'providers' => [
        ...
        Bluora\LaravelSlack\ServiceProvider::class,
        ...
    ];
```

Enable the facade by editing config/app.php:

```php
    'aliases' => [
        ...
        'Slack' => Bluora\LaravelSlack\Facade::class,
        ...
    ];
```

Then [create an incoming webhook](https://my.slack.com/services/new/incoming-webhook) for each Slack team you'd like to send messages to. You'll need the webhook URL(s) in order to configure this package.

Finally, publish the config file with `php artisan vendor:publish`. You'll find it at `config/slack.php`.

## Configuration

The config file comes with defaults and placeholders. Configure at least one team and any defaults you'd like to change.

## Usage

```php
// Send a message to the default channel
Slack::send('Hello world!');

// Send a message to a different channel
Slack::to('#accounting')->send('Are we rich yet?');

// Send a private message
Slack::to('@username')->send('psst!');
```
## Contributing

Please see [CONTRIBUTING](https://github.com/bluora/laravel-slack-api/blob/master/CONTRIBUTING.md) for details.

## Credits

* [Rocco Howard](https://github.com/therocis)
* [All Contributors](https://github.com/bluora/laravel-slack-api/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/bluora/laravel-slack-api/blob/master/LICENSE) for more information.
