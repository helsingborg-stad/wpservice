<?php

namespace WpService\Contracts;

interface RemoveAllActions
{
    /**
 * Removes all of the callback functions from an action hook.
 *
 * @since 2.7.0
 *
 * @param string $hookName The action to remove callbacks from.
 * @param int|false $priority  Optional. The priority number to remove them from.
 *                             Default false.
 * @return true Always returns true.
 */
    public function removeAllActions(string $hookName, int|false $priority): true;
}
