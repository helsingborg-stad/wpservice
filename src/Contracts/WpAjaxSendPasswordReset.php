<?php

namespace WpService\Contracts;

interface WpAjaxSendPasswordReset
{
    /**
     * Handles sending a password reset link via AJAX.
     *
     * @since 5.7.0
     */
    public function wpAjaxSendPasswordReset(): void;
}
