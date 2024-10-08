<?php

namespace WpService\Contracts;

interface WpShakeJs
{
    /**
 * Outputs the JavaScript to handle the form shaking on the login page.
 *
 * @since 3.0.0
 */
    public function wpShakeJs(): void;
}