<?php

namespace WpService\Contracts;

interface WpDefaultScriptModules
{
/**
 * Registers all the default WordPress Script Modules.
 *
 * @since 6.7.0
 */
    public function wpDefaultScriptModules(): void;
}
