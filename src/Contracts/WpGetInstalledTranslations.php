<?php

namespace WpService\Contracts;

interface WpGetInstalledTranslations
{
    /**
     * Gets installed translations.
     *
     * Looks in the wp-content/languages directory for translations of
     * plugins or themes.
     *
     * @since 3.7.0
     *
     * @global WP_Textdomain_Registry $wp_textdomain_registry WordPress Textdomain Registry.
     *
     * @param string $type What to search for. Accepts 'plugins', 'themes', 'core'.
     * @return array Array of language data.
     */
    public function wpGetInstalledTranslations(string $type): array;
}
