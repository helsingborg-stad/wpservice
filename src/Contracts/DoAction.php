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
     * Do an action in WordPress.
     *
     * @param string $hookName The name of the action hook.
     * @param mixed $args Additional arguments passed to the action hook.
     * @return void
     */
    public function doAction(string $hookName, mixed $args): void;
}
