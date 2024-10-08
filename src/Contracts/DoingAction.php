<?php

namespace WpService\Contracts;

interface DoingAction
{
    /**
 * Returns whether or not an action hook is currently being processed.
 *
 * The function current_action() only returns the most recent action being executed.
 * did_action() returns the number of times an action has been fired during
 * the current request.
 *
 * This function allows detection for any action currently being executed
 * (regardless of whether it's the most recent action to fire, in the case of
 * hooks called from hook callbacks) to be verified.
 *
 * @since 3.9.0
 *
 * @see current_action()
 * @see did_action()
 *
 * @param string|null $hookName Optional. Action hook to check. Defaults to null,
 *                               which checks if any action is currently being run.
 * @return bool Whether the action is currently in the stack.
 */
    public function doingAction(string|null $hookName = null): bool;
}
