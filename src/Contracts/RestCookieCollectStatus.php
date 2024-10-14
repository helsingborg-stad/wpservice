<?php

namespace WpService\Contracts;

interface RestCookieCollectStatus
{
/**
 * Collects cookie authentication status.
 *
 * Collects errors from wp_validate_auth_cookie for use by rest_cookie_check_errors.
 *
 * @since 4.4.0
 *
 * @see current_action()
 * @global mixed $wp_rest_auth_cookie
 */
    public function restCookieCollectStatus(): void;
}
