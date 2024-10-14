<?php

namespace WpService\Contracts;

interface IsLocaleSwitched
{
/**
 * Determines whether switch_to_locale() is in effect.
 *
 * @since 4.7.0
 *
 * @global WP_Locale_Switcher $wp_locale_switcher WordPress locale switcher object.
 *
 * @return bool True if the locale has been switched, false otherwise.
 */
    public function isLocaleSwitched(): bool;
}
