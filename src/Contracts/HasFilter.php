<?php

namespace WpService\Contracts;

interface HasFilter
{
/**
 * Checks if any filter has been registered for a hook.
 *
 * When using the `$callback` argument, this function may return a non-boolean value
 * that evaluates to false (e.g. 0), so use the `===` operator for testing the return value.
 *
 * @since 2.5.0
 * @since 6.9.0 Added the `$priority` parameter.
 *
 * @global WP_Hook[] $wp_filter Stores all of the filters and actions.
 *
 * @param string $hookName The name of the filter hook.
 * @param callable|string|array|false $callback  Optional. The callback to check for.
 *                                               This function can be called unconditionally to speculatively check
 *                                               a callback that may or may not exist. Default false.
 * @param int|false $priority  Optional. The specific priority at which to check for the callback.
 *                                               Default false.
 * @return bool|int If `$callback` is omitted, returns boolean for whether the hook has
 *                  anything registered. When checking a specific function, the priority
 *                  of that hook is returned, or false if the function is not attached.
 *                  If `$callback` and `$priority` are both provided, a boolean is returned
 *                  for whether the specific function is registered at that priority.
 */
    public function hasFilter(string $hookName, callable|string|array|false $callback = false, int|false $priority = false): bool|int;
}
