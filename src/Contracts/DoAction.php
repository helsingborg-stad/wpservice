<?php

namespace WpService\Contracts;

interface DoAction
{
    /**
     * Calls the callback functions that have been added to an action hook.
     *
     * This function invokes all functions attached to action hook `$hook_name`.
     * It is possible to create new action hooks by simply calling this function,
     * specifying the name of the new hook using the `$hook_name` parameter.
     *
     * You can pass extra arguments to the hooks, much like you can with `apply_filters()`.
     *
     * Example usage:
     *
     *     // The action callback function.
     *     function example_callback( $arg1, $arg2 ) {
     *         // (maybe) do something with the args.
     *     }
     *     add_action( 'example_action', 'example_callback', 10, 2 );
     *
     *     /*
     *      * Trigger the actions by calling the 'example_callback()' function
     *      * that's hooked onto `example_action` above.
     *      *
     *      * - 'example_action' is the action hook.
     *      * - $arg1 and $arg2 are the additional arguments passed to the callback.
     *     do_action( 'example_action', $arg1, $arg2 );
     *
     * @since 1.2.0
     * @since 5.3.0 Formalized the existing and already documented `...$arg` parameter
     *              by adding it to the function signature.
     *
     * @global WP_Hook[] $wp_filter         Stores all of the filters and actions.
     * @global int[]     $wp_actions        Stores the number of times each action was triggered.
     * @global string[]  $wp_current_filter Stores the list of current filters with the current one last.
     *
     * @param string $hookName The name of the action to be executed.
     * @param mixed  ...$arg    Optional. Additional arguments which are passed on to the
     *                          functions hooked to the action. Default empty.
     */
    public function doAction(string $hookName): void;
}
