<?php

namespace WpService\Contracts;

interface SwitchToLocale
{
/**
 * Switches the translations according to the given locale.
 *
 * @since 4.7.0
 *
 * @global WP_Locale_Switcher $wp_locale_switcher WordPress locale switcher object.
 *
 * @param string $locale The locale.
 * @return bool True on success, false on failure.
 */
    public function switchToLocale(string $locale): bool;
}
