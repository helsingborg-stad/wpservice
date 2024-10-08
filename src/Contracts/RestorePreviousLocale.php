<?php

namespace WpService\Contracts;

interface RestorePreviousLocale
{
    /**
 * Restores the translations according to the previous locale.
 *
 * @since 4.7.0
 *
 * @global WP_Locale_Switcher $wp_locale_switcher WordPress locale switcher object.
 *
 * @return string|false Locale on success, false on error.
 */
    public function restorePreviousLocale(): string|false;
}
