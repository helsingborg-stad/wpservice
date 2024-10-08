<?php

namespace WpService\Contracts;

interface SingleTermTitle
{
    /**
     * Displays or retrieves page title for taxonomy term archive.
     *
     * Useful for taxonomy term template files for displaying the taxonomy term page title.
     * The prefix does not automatically place a space between the prefix, so if there should
     * be a space, the parameter value will need to have it at the end.
     *
     * @since 3.1.0
     *
     * @param string $prefix  Optional. What to display before the title.
     * @param bool $display Optional. Whether to display or retrieve title. Default true.
     * @return string|void Title when retrieving.
     */
    public function singleTermTitle(string $prefix = '', bool $display = true): mixed;
}
