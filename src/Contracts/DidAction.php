<?php

namespace WpService\Contracts;

interface DidAction
{
    /**
     * Retrieves the number of times an action has been fired during the current request.
     *
     * @since 2.1.0
     *
     * @global int[] $wp_actions Stores the number of times each action was triggered.
     *
     * @param string $hookName The name of the action hook.
     * @return int The number of times the action hook has been fired.
     */
    public function didAction(string $hookName): int;
}
