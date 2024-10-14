<?php

namespace WpService\Contracts;

interface CurrentAction
{
/**
 * Retrieves the name of the current action hook.
 *
 * @since 3.9.0
 *
 * @return string Hook name of the current action.
 */
    public function currentAction(): string;
}
