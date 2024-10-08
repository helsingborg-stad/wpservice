<?php

namespace WpService\Contracts;

interface WpUpdatePhpAnnotation
{
    /**
 * Prints the default annotation for the web host altering the "Update PHP" page URL.
 *
 * This function is to be used after {@see wp_get_update_php_url()} to display a consistent
 * annotation if the web host has altered the default "Update PHP" page URL.
 *
 * @since 5.1.0
 * @since 5.2.0 Added the `$before` and `$after` parameters.
 * @since 6.4.0 Added the `$display` parameter.
 *
 * @param string $before  Markup to output before the annotation. Default `<p class="description">`.
 * @param string $after   Markup to output after the annotation. Default `</p>`.
 * @param bool $display Whether to echo or return the markup. Default `true` for echo.
 *
 * @return string|void
 */
    public function wpUpdatePhpAnnotation(string $before = '<p class="description">', string $after = '</p>', bool $display = true): string;
}
