<?php

namespace Sixgweb\RecaptchaForms\Components;

use Sixgweb\Recaptcha\Components\Recaptcha as RecaptchaBase;

/**
 * RecaptchaEntry Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Recaptcha extends RecaptchaBase
{
    /**
     * Component Details
     *
     * @return array
     */
    public function componentDetails(): array
    {
        return [
            'name' => 'Entry reCaptcha',
            'description' => 'Provides Recaptcha for Forms Entry'
        ];
    }
}
