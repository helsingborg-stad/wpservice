<?php

namespace WpService\Contracts;

interface CurrentAction
{
/**
 * Retrieves the name of the current action hook.
 *
 * @since 3.9.0
 *
 * @return string|false Hook name of the current action, false if no action is running.
 */
    public function currentAction(): string|false;
}
