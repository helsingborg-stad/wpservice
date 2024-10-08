<?php

namespace WpService\Contracts;

interface PrintLateStyles
{
    /**
 * Prints the styles that were queued too late for the HTML head.
 *
 * @since 3.3.0
 *
 * @global WP_Styles $wp_styles
 * @global bool      $concatenate_scripts
 *
 * @return array|void
 */
    public function printLateStyles(): array;
}
