<?php

namespace WpService\Contracts;

interface WpLoginout
{
    /**
     * Displays the Log In/Out link.
     *
     * Displays a link, which allows users to navigate to the Log In page to log in
     * or log out depending on whether they are currently logged in.
     *
     * @since 1.5.0
     *
     * @param string $redirect Optional path to redirect to on login/logout.
     * @param bool $display  Default to echo and not return the link.
     * @return void|string Void if `$display` argument is true, log in/out link if `$display` is false.
     */
    public function wpLoginout(string $redirect = '', bool $display = true): mixed;
}
