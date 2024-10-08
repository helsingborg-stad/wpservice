<?php

namespace WpService\Contracts;

interface WpOriginalRefererField
{
    /**
 * Retrieves or displays original referer hidden field for forms.
 *
 * The input name is '_wp_original_http_referer' and will be either the same
 * value of wp_referer_field(), if that was posted already or it will be the
 * current page, if it doesn't exist.
 *
 * @since 2.0.4
 *
 * @param bool $display      Optional. Whether to echo the original http referer. Default true.
 * @param string $jumpBackTo Optional. Can be 'previous' or page you want to jump back to.
 *                             Default 'current'.
 * @return string Original referer field.
 */
    public function wpOriginalRefererField(bool $display = true, string $jumpBackTo = 'current'): string;
}
