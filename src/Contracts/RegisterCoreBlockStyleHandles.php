<?php

namespace WpService\Contracts;

interface RegisterCoreBlockStyleHandles
{
/**
 * Registers core block style handles.
 *
 * While {@see register_block_style_handle()} is typically used for that, the way it is
 * implemented is inefficient for core block styles. Registering those style handles here
 * avoids unnecessary logic and filesystem lookups in the other function.
 *
 * @since 6.3.0
 */
    public function registerCoreBlockStyleHandles(): void;
}
