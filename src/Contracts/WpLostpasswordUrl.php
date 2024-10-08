<?php

namespace WpService\Contracts;

interface WpLostpasswordUrl
{
    /**
     * Returns the URL that allows the user to reset the lost password.
     *
     * @since 2.8.0
     *
     * @param string $redirect Path to redirect to on login.
     * @return string Lost password URL.
     */
    public function wpLostpasswordUrl(string $redirect = ''): string;
}
