<?php

namespace WpService\Contracts;

interface WpRegisterCoreAbilities
{
/**
 * Registers the default core abilities.
 *
 * @since 6.9.0
 *
 * @return void
 */
    public function wpRegisterCoreAbilities(): void;
}
