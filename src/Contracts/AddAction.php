<?php

namespace WpService\Contracts;

interface AddAction
{
    /**
 * Adds a callback function to an action hook.
 *
 * Actions are the hooks that the WordPress core launches at specific points
 * during execution, or when specific events occur. Plugins can specify that
 * one or more of its PHP functions are executed at these points, using the
 * Action API.
 *
 * @since 1.2.0
 *
 * @param string $hookName       The name of the action to add the callback to.
 * @param callable $callback        The callback to be run when the action is called.
 * @param int $priority        Optional. Used to specify the order in which the functions
 *                                  associated with a particular action are executed.
 *                                  Lower numbers correspond with earlier execution,
 *                                  and functions with the same priority are executed
 *                                  in the order in which they were added to the action. Default 10.
 * @param int $acceptedArgs   Optional. The number of arguments the function accepts. Default 1.
 * @return true Always returns true.
 */
    public function addAction(string $hookName, callable $callback, int $priority, int $acceptedArgs): true;
}
