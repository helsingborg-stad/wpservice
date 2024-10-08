<?php

namespace WpService\Contracts;

interface SwitchToUserLocale
{
    /**
     * Switches the translations according to the given user's locale.
     *
     * @since 6.2.0
     *
     * @global WP_Locale_Switcher $wp_locale_switcher WordPress locale switcher object.
     *
     * @param int $userId User ID.
     * @return bool True on success, false on failure.
     */
    public function switchToUserLocale(int $userId): bool;
}
