<?php

namespace WpService\Contracts;

interface WpIsSiteProtectedByBasicAuth
{
/**
 * Checks if this site is protected by HTTP Basic Auth.
 *
 * At the moment, this merely checks for the present of Basic Auth credentials. Therefore, calling
 * this function with a context different from the current context may give inaccurate results.
 * In a future release, this evaluation may be made more robust.
 *
 * Currently, this is only used by Application Passwords to prevent a conflict since it also utilizes
 * Basic Auth.
 *
 * @since 5.6.1
 *
 * @global string $pagenow The filename of the current screen.
 *
 * @param string $context The context to check for protection. Accepts 'login', 'admin', and 'front'.
 *                        Defaults to the current context.
 * @return bool Whether the site is protected by Basic Auth.
 */
    public function wpIsSiteProtectedByBasicAuth(string $context = ''): bool;
}
