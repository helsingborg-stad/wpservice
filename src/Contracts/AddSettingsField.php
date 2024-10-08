<?php

namespace WpService\Contracts;

interface AddSettingsField
{
    /**
 * Adds a new field to a section of a settings page.
 *
 * Part of the Settings API. Use this to define a settings field that will show
 * as part of a settings section inside a settings page. The fields are shown using
 * do_settings_fields() in do_settings_sections().
 *
 * The $callback argument should be the name of a function that echoes out the
 * HTML input tags for this setting field. Use get_option() to retrieve existing
 * values to show.
 *
 * @since 2.7.0
 * @since 4.2.0 The `$class` argument was added.
 *
 * @global array $wp_settings_fields Storage array of settings fields and info about their pages/sections.
 *
 * @param string $id       Slug-name to identify the field. Used in the 'id' attribute of tags.
 * @param string $title    Formatted title of the field. Shown as the label for the field
 *                           during output.
 * @param callable $callback Function that fills the field with the desired form inputs. The
 *                           function should echo its output.
 * @param string $page     The slug-name of the settings page on which to show the section
 *                           (general, reading, writing, ...).
 * @param string $section  Optional. The slug-name of the section of the settings page
 *                           in which to show the box. Default 'default'.
 * @param array $args {
 *     Optional. Extra arguments that get passed to the callback function.
 *
 *     @type string $label_for When supplied, the setting title will be wrapped
 *                             in a `<label>` element, its `for` attribute populated
 *                             with this value.
 *     @type string $class     CSS Class to be added to the `<tr>` element when the
 *                             field is output.
 * }
 */
    public function addSettingsField(string $id, string $title, callable $callback, string $page, string $section = 'default', array $args = []): void;
}
