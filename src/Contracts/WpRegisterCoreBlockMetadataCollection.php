<?php

namespace WpService\Contracts;

interface WpRegisterCoreBlockMetadataCollection
{
/**
 * Registers the core block metadata collection.
 *
 * This function is hooked into the 'init' action with a priority of 9,
 * ensuring that the core block metadata is registered before the regular
 * block initialization that happens at priority 10.
 *
 * @since 6.7.0
 */
    public function wpRegisterCoreBlockMetadataCollection(): void;
}
