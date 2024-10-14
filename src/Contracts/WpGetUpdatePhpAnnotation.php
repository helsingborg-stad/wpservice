<?php

namespace WpService\Contracts;

interface WpGetUpdatePhpAnnotation
{
/**
 * Returns the default annotation for the web hosting altering the "Update PHP" page URL.
 *
 * This function is to be used after {@see wp_get_update_php_url()} to return a consistent
 * annotation if the web host has altered the default "Update PHP" page URL.
 *
 * @since 5.2.0
 *
 * @return string Update PHP page annotation. An empty string if no custom URLs are provided.
 */
    public function wpGetUpdatePhpAnnotation(): string;
}
