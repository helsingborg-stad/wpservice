<?php

namespace WpService\Contracts;

interface ApplyFiltersRefArray
{
    /**
     * Calls the callback functions that have been added to a filter hook, specifying arguments in an array.
     *
     * @since 3.0.0
     *
     * @see apply_filters() This function is identical, but the arguments passed to the
     *                      functions hooked to `$hook_name` are supplied using an array.
     *
     * @global WP_Hook[] $wp_filter         Stores all of the filters and actions.
     * @global int[]     $wp_filters        Stores the number of times each filter was triggered.
     * @global string[]  $wp_current_filter Stores the list of current filters with the current one last.
     *
     * @param string $hookName The name of the filter hook.
     * @param array $args      The arguments supplied to the functions hooked to `$hook_name`.
     * @return mixed The filtered value after all hooked functions are applied to it.
     */
    public function applyFiltersRefArray(string $hookName, array $args): mixed;
}
