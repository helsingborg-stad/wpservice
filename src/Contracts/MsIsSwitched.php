<?php

namespace WpService\Contracts;

interface MsIsSwitched
{
/**
 * Determines if switch_to_blog() is in effect.
 *
 * @since 3.5.0
 *
 * @global array $_wp_switched_stack
 *
 * @return bool True if switched, false otherwise.
 */
    public function msIsSwitched(): bool;
}
