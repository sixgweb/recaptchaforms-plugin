<?php

namespace Sixgweb\RecaptchaForms;

use App;
use Event;
use Backend;
use System\Classes\PluginBase;
use Sixgweb\Forms\Components\Entry as EntryComponent;
use Sixgweb\RecaptchaForms\Classes\EventHandler;

/**
 * Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = [
        'Sixgweb.Forms',
        'Sixgweb.Recaptcha',
    ];
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'RecaptchaForms',
            'description' => 'No description provided yet...',
            'author'      => 'Sixgweb',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {
        Event::subscribe(EventHandler::class);
    }

    public function registerComponents()
    {
        return [
            'Sixgweb\RecaptchaForms\Components\Recaptcha' => 'entryRecaptcha',
        ];
    }
}
