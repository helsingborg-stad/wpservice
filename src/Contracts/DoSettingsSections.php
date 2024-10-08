<?php

namespace WpService\Contracts;

interface DoSettingsSections
{
    /**
     * Prints out all settings sections added to a particular settings page.
     *
     * Part of the Settings API. Use this in a settings page callback function
     * to output all the sections and fields that were added to that $page with
     * add_settings_section() and add_settings_field()
     *
     * @global array $wp_settings_sections Storage array of all settings sections added to admin pages.
     * @global array $wp_settings_fields Storage array of settings fields and info about their pages/sections.
     * @since 2.7.0
     *
     * @param string $page The slug name of the page whose settings sections you want to output.
     */
    public function doSettingsSections(string $page): void;
}
