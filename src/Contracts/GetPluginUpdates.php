<?php

namespace WpService\Contracts;

interface GetPluginUpdates
{
/**
 * Retrieves plugins with updates available.
 *
 * @since 2.9.0
 *
 * @return object[]
 */
    public function getPluginUpdates(): array;
}
