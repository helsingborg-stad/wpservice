<?php

namespace WpService\Contracts;

interface SingleTagTitle
{
/**
 * Displays or retrieves page title for tag post archive.
 *
 * Useful for tag template files for displaying the tag page title. The prefix
 * does not automatically place a space between the prefix, so if there should
 * be a space, the parameter value will need to have it at the end.
 *
 * @since 2.3.0
 *
 * @param string $prefix  Optional. What to display before the title.
 * @param bool $display Optional. Whether to display or retrieve title. Default true.
 * @return string|void Title when retrieving.
 */
    public function singleTagTitle(string $prefix = '', bool $display = true): mixed;
}
