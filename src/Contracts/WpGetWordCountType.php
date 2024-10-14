<?php

namespace WpService\Contracts;

interface WpGetWordCountType
{
/**
 * Retrieves the word count type based on the locale.
 *
 * @since 6.2.0
 *
 * @global WP_Locale $wp_locale WordPress date and time locale object.
 *
 * @return string Locale-specific word count type. Possible values are `characters_excluding_spaces`,
 *                `characters_including_spaces`, or `words`. Defaults to `words`.
 */
    public function wpGetWordCountType(): string;
}
