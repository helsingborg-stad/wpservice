<?php

namespace WpService\Contracts;

interface WpFixServerVars
{
    /**
 * Fixes `$_SERVER` variables for various setups.
 *
 * @since 3.0.0
 * @access private
 *
 * @global string $PHP_SELF The filename of the currently executing script,
 *                          relative to the document root.
 */
    public function wpFixServerVars(): void;
}
