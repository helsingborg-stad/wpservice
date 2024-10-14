<?php

namespace WpService\Contracts;

interface WpGetListItemSeparator
{
/**
 * Retrieves the list item separator based on the locale.
 *
 * @since 6.0.0
 *
 * @global WP_Locale $wp_locale WordPress date and time locale object.
 *
 * @return string Locale-specific list item separator.
 */
    public function wpGetListItemSeparator(): string;
}
