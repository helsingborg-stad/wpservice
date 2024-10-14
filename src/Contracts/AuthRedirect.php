<?php

namespace WpService\Contracts;

interface AuthRedirect
{
/**
 * Checks if a user is logged in, if not it redirects them to the login page.
 *
 * When this code is called from a page, it checks to see if the user viewing the page is logged in.
 * If the user is not logged in, they are redirected to the login page. The user is redirected
 * in such a way that, upon logging in, they will be sent directly to the page they were originally
 * trying to access.
 *
 * @since 1.5.0
 */
    public function authRedirect(): void;
}
