<?php

namespace WpService\Contracts;

interface PrintFooterScripts
{
/**
 * Prints the scripts that were queued for the footer or too late for the HTML head.
 *
 * @since 2.8.0
 *
 * @global WP_Scripts $wp_scripts
 * @global bool       $concatenate_scripts
 *
 * @return string[] Handles of the scripts that were printed.
 */
    public function printFooterScripts(): array;
}
