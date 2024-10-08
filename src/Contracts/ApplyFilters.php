<?php

namespace WpService\Contracts;

interface ApplyFilters
{
    /**
     * Calls the callback functions that have been added to a filter hook.
     *
     * This function invokes all functions attached to filter hook `$hook_name`.
     * It is possible to create new filter hooks by simply calling this function,
     * specifying the name of the new hook using the `$hook_name` parameter.
     *
     * The function also allows for multiple additional arguments to be passed to hooks.
     *
     * Example usage:
     *
     *     // The filter callback function.
     *     function example_callback( $string, $arg1, $arg2 ) {
     *         // (maybe) modify $string.
     *         return $string;
     *     }
     *     add_filter( 'example_filter', 'example_callback', 10, 3 );
     *
     *     /*
     *      * Apply the filters by calling the 'example_callback()' function
     *      * that's hooked onto `example_filter` above.
     *      *
     *      * - 'example_filter' is the filter hook.
     *      * - 'filter me' is the value being filtered.
     *      * - $arg1 and $arg2 are the additional arguments passed to the callback.
     *     $value = apply_filters( 'example_filter', 'filter me', $arg1, $arg2 );
     *
     * @since 0.71
     * @since 6.0.0 Formalized the existing and already documented `...$args` parameter
     *              by adding it to the function signature.
     *
     * @global WP_Hook[] $wp_filter         Stores all of the filters and actions.
     * @global int[]     $wp_filters        Stores the number of times each filter was triggered.
     * @global string[]  $wp_current_filter Stores the list of current filters with the current one last.
     *
     * @param string $hookName The name of the filter hook.
     * @param mixed $value     The value to filter.
     * @param mixed  ...$args   Optional. Additional parameters to pass to the callback functions.
     * @return mixed The filtered value after all hooked functions are applied to it.
     */
    public function applyFilters(string $hookName, mixed $value): mixed;
}
