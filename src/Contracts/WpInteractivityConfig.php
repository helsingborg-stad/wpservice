<?php

namespace WpService\Contracts;

interface WpInteractivityConfig
{
    /**
 * Gets and/or sets the configuration of the Interactivity API for a given
 * store namespace.
 *
 * If configuration for that store namespace exists, it merges the new
 * provided configuration with the existing one.
 *
 * @since 6.5.0
 *
 * @param string $storeNamespace The unique store namespace identifier.
 * @param array $config          Optional. The array that will be merged with the existing configuration for the
 *                                specified store namespace.
 * @return array The configuration for the specified store namespace. This will be the updated configuration if a
 *               $config argument was provided.
 */
    public function wpInteractivityConfig(string $storeNamespace, array $config): array;
}
