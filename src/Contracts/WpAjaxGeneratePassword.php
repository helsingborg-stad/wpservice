<?php

namespace WpService\Contracts;

interface WpAjaxGeneratePassword
{
    /**
 * Handles generating a password via AJAX.
 *
 * @since 4.4.0
 */
    public function wpAjaxGeneratePassword(): void;
}
