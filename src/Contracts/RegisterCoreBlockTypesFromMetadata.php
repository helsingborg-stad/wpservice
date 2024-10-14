<?php

namespace WpService\Contracts;

interface RegisterCoreBlockTypesFromMetadata
{
/**
 * Registers core block types using metadata files.
 * Dynamic core blocks are registered separately.
 *
 * @since 5.5.0
 */
    public function registerCoreBlockTypesFromMetadata(): void;
}
