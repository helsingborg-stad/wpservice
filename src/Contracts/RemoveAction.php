<?php

namespace WpService\Contracts;

interface RemoveAction
{
    /**
 * Removes a callback function from an action hook.
 *
 * This can be used to remove default functions attached to a specific action
 * hook and possibly replace them with a substitute.
 *
 * To remove a hook, the `$callback` and `$priority` arguments must match
 * when the hook was added. This goes for both filters and actions. No warning
 * will be given on removal failure.
 *
 * @since 1.2.0
 *
 * @param string $hookName The action hook to which the function to be removed is hooked.
 * @param callable|string|array $callback  The name of the function which should be removed.
 *                                         This function can be called unconditionally to speculatively remove
 *                                         a callback that may or may not exist.
 * @param int $priority  Optional. The exact priority used when adding the original
 *                                         action callback. Default 10.
 * @return bool Whether the function is removed.
 */
    public function removeAction(string $hookName, callable|string|array $callback, int $priority): bool;
}
