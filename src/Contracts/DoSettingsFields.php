<?php

namespace WpService\Contracts;

interface DoSettingsFields
{
    /**
     * Prints out the settings fields for a particular settings section.
     *
     * Part of the Settings API. Use this in a settings page to output
     * a specific section. Should normally be called by do_settings_sections()
     * rather than directly.
     *
     * @global array $wp_settings_fields Storage array of settings fields and their pages/sections.
     *
     * @since 2.7.0
     *
     * @param string $page Slug title of the admin page whose settings fields you want to show.
     * @param string $section Slug title of the settings section whose fields you want to show.
     */
    public function doSettingsFields(string $page, string $section): void;
}
