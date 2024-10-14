<?php

namespace WpService\Contracts;

interface HasAction
{
/**
 * Checks if any action has been registered for a hook.
 *
 * When using the `$callback` argument, this function may return a non-boolean value
 * that evaluates to false (e.g. 0), so use the `===` operator for testing the return value.
 *
 * @since 2.5.0
 *
 * @see has_filter() This function is an alias of has_filter().
 *
 * @param string $hookName The name of the action hook.
 * @param callable|string|array|false $callback  Optional. The callback to check for.
 *                                               This function can be called unconditionally to speculatively check
 *                                               a callback that may or may not exist. Default false.
 * @return bool|int If `$callback` is omitted, returns boolean for whether the hook has
 *                  anything registered. When checking a specific function, the priority
 *                  of that hook is returned, or false if the function is not attached.
 */
    public function hasAction(string $hookName, callable|string|array|false $callback = false): bool|int;
}
