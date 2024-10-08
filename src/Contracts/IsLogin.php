<?php

namespace WpService\Contracts;

interface IsLogin
{
    /**
     * Determines whether the current request is for the login screen.
     *
     * @since 6.1.0
     *
     * @see wp_login_url()
     *
     * @return bool True if inside WordPress login screen, false otherwise.
     */
    public function isLogin(): bool;
}
