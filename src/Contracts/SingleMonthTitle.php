<?php

namespace WpService\Contracts;

interface SingleMonthTitle
{
/**
 * Displays or retrieves page title for post archive based on date.
 *
 * Useful for when the template only needs to display the month and year,
 * if either are available. The prefix does not automatically place a space
 * between the prefix, so if there should be a space, the parameter value
 * will need to have it at the end.
 *
 * @since 0.71
 *
 * @global WP_Locale $wp_locale WordPress date and time locale object.
 *
 * @param string $prefix  Optional. What to display before the title.
 * @param bool $display Optional. Whether to display or retrieve title. Default true.
 * @return string|false|void False if there's no valid title for the month. Title when retrieving.
 */
    public function singleMonthTitle(string $prefix = '', bool $display = true): mixed;
}
