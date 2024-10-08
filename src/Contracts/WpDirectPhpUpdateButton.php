<?php

namespace WpService\Contracts;

interface WpDirectPhpUpdateButton
{
    /**
     * Displays a button directly linking to a PHP update process.
     *
     * This provides hosts with a way for users to be sent directly to their PHP update process.
     *
     * The button is only displayed if a URL is returned by `wp_get_direct_php_update_url()`.
     *
     * @since 5.1.1
     */
    public function wpDirectPhpUpdateButton(): void;
}
