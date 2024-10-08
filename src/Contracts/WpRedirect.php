<?php

namespace WpService\Contracts;

interface WpRedirect
{
    /**
     * Redirects to another page.
     *
     * Note: wp_redirect() does not exit automatically, and should almost always be
     * followed by a call to `exit;`:
     *
     *     wp_redirect( $url );
     *     exit;
     *
     * Exiting can also be selectively manipulated by using wp_redirect() as a conditional
     * in conjunction with the {@see 'wp_redirect'} and {@see 'wp_redirect_status'} filters:
     *
     *     if ( wp_redirect( $url ) ) {
     *         exit;
     *     }
     *
     * @since 1.5.1
     * @since 5.1.0 The `$x_redirect_by` parameter was added.
     * @since 5.4.0 On invalid status codes, wp_die() is called.
     *
     * @global bool $is_IIS
     *
     * @param string $location      The path or URL to redirect to.
     * @param int $status        Optional. HTTP response status code to use. Default '302' (Moved Temporarily).
     * @param string|false $xRedirectBy Optional. The application doing the redirect or false to omit. Default 'WordPress'.
     * @return bool False if the redirect was canceled, true otherwise.
     */
    public function wpRedirect(string $location, int $status, string|false $xRedirectBy): bool;
}
