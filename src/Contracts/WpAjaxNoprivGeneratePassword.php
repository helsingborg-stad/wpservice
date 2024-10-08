<?php

namespace WpService\Contracts;

interface WpAjaxNoprivGeneratePassword
{
    /**
 * Handles generating a password in the no-privilege context via AJAX.
 *
 * @since 5.7.0
 */
    public function wpAjaxNoprivGeneratePassword(): void;
}
