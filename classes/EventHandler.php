<?php

namespace Sixgweb\RecaptchaForms\Classes;

use October\Rain\Database\Model;
use Sixgweb\Recaptcha\Classes\AbstractEventHandler;

class EventHandler extends AbstractEventHandler
{

    protected function getComponentClass(): ?string
    {
        return 'Sixgweb\Forms\Components\Entry';
    }

    protected function getComponentModel($component): ?Model
    {
        return $component->getEntry();
    }
}
