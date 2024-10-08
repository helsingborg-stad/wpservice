<?php

namespace WpService\Contracts;

interface SingleCatTitle
{
    /**
 * Displays or retrieves page title for category archive.
 *
 * Useful for category template files for displaying the category page title.
 * The prefix does not automatically place a space between the prefix, so if
 * there should be a space, the parameter value will need to have it at the end.
 *
 * @since 0.71
 *
 * @param string $prefix  Optional. What to display before the title.
 * @param bool $display Optional. Whether to display or retrieve title. Default true.
 * @return string|void Title when retrieving.
 */
    public function singleCatTitle(string $prefix = '', bool $display = true): string;
}
