<?php

namespace WpService\Contracts;

interface WpRecoveryMode
{
/**
 * Access the WordPress Recovery Mode instance.
 *
 * @since 5.2.0
 *
 * @return \WP_Recovery_Mode
 */
    public function wpRecoveryMode(): \WP_Recovery_Mode;
}
