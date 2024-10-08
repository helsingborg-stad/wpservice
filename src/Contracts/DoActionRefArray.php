<?php

namespace WpService\Contracts;

interface DoActionRefArray
{
    /**
 * Calls the callback functions that have been added to an action hook, specifying arguments in an array.
 *
 * @since 2.1.0
 *
 * @see do_action() This function is identical, but the arguments passed to the
 *                  functions hooked to `$hook_name` are supplied using an array.
 *
 * @global WP_Hook[] $wp_filter         Stores all of the filters and actions.
 * @global int[]     $wp_actions        Stores the number of times each action was triggered.
 * @global string[]  $wp_current_filter Stores the list of current filters with the current one last.
 *
 * @param string $hookName The name of the action to be executed.
 * @param array $args      The arguments supplied to the functions hooked to `$hook_name`.
 */
    public function doActionRefArray(string $hookName, array $args): void;
}
