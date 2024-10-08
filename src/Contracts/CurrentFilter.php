<?php

namespace WpService\Contracts;

interface CurrentFilter
{
    /**
 * Retrieves the name of the current filter hook.
 *
 * @since 2.5.0
 *
 * @global string[] $wp_current_filter Stores the list of current filters with the current one last
 *
 * @return string Hook name of the current filter.
 */
    public function currentFilter(): string;
}
