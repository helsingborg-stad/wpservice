<?php

namespace WpService\Contracts;

interface WpRegisterBlockMetadataCollection
{
/**
 * Registers a block metadata collection.
 *
 * This function allows core and third-party plugins to register their block metadata
 * collections in a centralized location. Registering collections can improve performance
 * by avoiding multiple reads from the filesystem and parsing JSON.
 *
 * @since 6.7.0
 *
 * @param string $path     The base path in which block files for the collection reside.
 * @param string $manifest The path to the manifest file for the collection.
 */
    public function wpRegisterBlockMetadataCollection(string $path, string $manifest): void;
}
