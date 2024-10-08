<?php

namespace WpService\Contracts;

interface WpLoadTranslationsEarly
{
    /**
 * Attempts an early load of translations.
 *
 * Used for errors encountered during the initial loading process, before
 * the locale has been properly detected and loaded.
 *
 * Designed for unusual load sequences (like setup-config.php) or for when
 * the script will then terminate with an error, otherwise there is a risk
 * that a file can be double-included.
 *
 * @since 3.4.0
 * @access private
 *
 * @global WP_Textdomain_Registry $wp_textdomain_registry WordPress Textdomain Registry.
 * @global WP_Locale              $wp_locale              WordPress date and time locale object.
 */
    public function wpLoadTranslationsEarly(): void;
}
