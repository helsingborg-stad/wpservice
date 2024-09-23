<?php

namespace WpService\Contracts;

interface SafeRedirect
{
    /**
     * Performs a safe (local) redirect, using wp_redirect().
     *
     * @see https://developer.wordpress.org/reference/functions/wp_safe_redirect/
     *
     * @param string       $location      The path or URL to redirect to.
     * @param int          $status        Optional. HTTP response status code to use. Default '302' (Moved Temporarily).
     * @param string|false $xRedirectBy Optional.
     * The application doing the redirect or false to omit. Default 'WordPress'.
     * @return bool False if the redirect was canceled, true otherwise.
     */
    public function safeRedirect(string $location, int $status = 302, string|false $xRedirectBy = 'WordPress'): bool;
}
