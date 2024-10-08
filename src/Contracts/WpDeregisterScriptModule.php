<?php

namespace WpService\Contracts;

interface WpDeregisterScriptModule
{
    /**
 * Deregisters the script module.
 *
 * @since 6.5.0
 *
 * @param string $id The identifier of the script module.
 */
    public function wpDeregisterScriptModule(string $id): void;
}
