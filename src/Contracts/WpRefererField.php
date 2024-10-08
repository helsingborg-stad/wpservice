<?php

namespace WpService\Contracts;

interface WpRefererField
{
    /**
 * Retrieves or displays referer hidden field for forms.
 *
 * The referer link is the current Request URI from the server super global. The
 * input name is '_wp_http_referer', in case you wanted to check manually.
 *
 * @since 2.0.4
 *
 * @param bool $display Optional. Whether to echo or return the referer field. Default true.
 * @return string Referer field HTML markup.
 */
    public function wpRefererField(bool $display = true): string;
}
