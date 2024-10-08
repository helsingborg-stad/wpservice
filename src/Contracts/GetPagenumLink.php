<?php

namespace WpService\Contracts;

interface GetPagenumLink
{
    /**
 * Retrieves the link for a page number.
 *
 * @since 1.5.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param int $pagenum Optional. Page number. Default 1.
 * @param bool $escape  Optional. Whether to escape the URL for display, with esc_url().
 *                      If set to false, prepares the URL with sanitize_url(). Default true.
 * @return string The link URL for the given page number.
 */
    public function getPagenumLink(int $pagenum = 1, bool $escape = true): string;
}
