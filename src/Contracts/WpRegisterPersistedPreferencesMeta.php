<?php

namespace WpService\Contracts;

interface WpRegisterPersistedPreferencesMeta
{
    /**
 * Registers the user meta property for persisted preferences.
 *
 * This property is used to store user preferences across page reloads and is
 * currently used by the block editor for preferences like 'fullscreenMode' and
 * 'fixedToolbar'.
 *
 * @since 6.1.0
 * @access private
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 */
    public function wpRegisterPersistedPreferencesMeta(): void;
}
