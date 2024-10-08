<?php

namespace WpService\Contracts;

interface ApacheModLoaded
{
    /**
 * Determines whether the specified module exist in the Apache config.
 *
 * @since 2.5.0
 *
 * @global bool $is_apache
 *
 * @param string $mod           The module, e.g. mod_rewrite.
 * @param bool $defaultValue Optional. The default return value if the module is not found. Default false.
 * @return bool Whether the specified module is loaded.
 */
    public function apacheModLoaded(string $mod, bool $defaultValue = false): bool;
}
