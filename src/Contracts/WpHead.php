<?php

namespace WpService\Contracts;

interface WpHead
{
/**
 * Fires the wp_head action.
 *
 * See {@see 'wp_head'}.
 *
 * @since 1.2.0
 */
    public function wpHead(): void;
}
