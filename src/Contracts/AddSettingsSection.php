<?php

namespace WpService\Contracts;

interface AddSettingsSection
{
/**
 * Adds a new section to a settings page.
 *
 * Part of the Settings API. Use this to define new settings sections for an admin page.
 * Show settings sections in your admin page callback function with do_settings_sections().
 * Add settings fields to your section with add_settings_field().
 *
 * The $callback argument should be the name of a function that echoes out any
 * content you want to show at the top of the settings section before the actual
 * fields. It can output nothing if you want.
 *
 * @since 2.7.0
 * @since 6.1.0 Added an `$args` parameter for the section's HTML wrapper and class name.
 *
 * @global array $wp_settings_sections Storage array of all settings sections added to admin pages.
 *
 * @param string $id       Slug-name to identify the section. Used in the 'id' attribute of tags.
 * @param string $title    Formatted title of the section. Shown as the heading for the section.
 * @param callable $callback Function that echos out any content at the top of the section (between heading and fields).
 * @param string $page     The slug-name of the settings page on which to show the section. Built-in pages include
 *                           'general', 'reading', 'writing', 'discussion', 'media', etc. Create your own using
 *                           add_options_page();
 * @param array $args     {
 *     Arguments used to create the settings section.
 *
 * @type string $before_section HTML content to prepend to the section's HTML output.
 *                                  Receives the section's class name as `%s`. Default empty.
 * @type string $after_section  HTML content to append to the section's HTML output. Default empty.
 * @type string $section_class  The class name to use for the section. Default empty.
 * }
 */
    public function addSettingsSection(string $id, string $title, callable $callback, string $page, array $args = []): void;
}
