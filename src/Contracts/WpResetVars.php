<?php

namespace WpService\Contracts;

interface WpResetVars
{
    /**
     * Resets global variables based on `$_GET` and `$_POST`.
     *
     * This function resets global variables based on the names passed
     * in the `$vars` array to the value of `$_POST[$var]` or `$_GET[$var]` or an
     * empty string if neither is defined.
     *
     * @since 2.0.0
     *
     * @param array $vars An array of globals to reset.
     */
    public function wpResetVars(array $vars): void;
}
