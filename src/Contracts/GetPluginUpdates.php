<?php

namespace WpService\Contracts;

interface GetPluginUpdates
{
    /**
 * Retrieves plugins with updates available.
 *
 * @since 2.9.0
 *
 * @return array
 */
    public function getPluginUpdates(): array;
}
