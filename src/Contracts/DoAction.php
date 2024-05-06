<?php

namespace WpService\Contracts;

/**
 * Interface DoAction
 *
 * This interface defines the contract for doing actions in WordPress.
 */
interface DoAction
{
    /**
     * Interface for performing an action.
     *
     * @param string $hook_name The name of the action to be executed.
     * @param mixed  ...$arg Optional. Additional arguments which are
     * passed on to the functions hooked to the action. Default empty.
     * @return void
     */
    public function doAction(string $hookName, mixed ...$arg): void;
}
