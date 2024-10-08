<?php

namespace WpService\Contracts;

interface WpRecoveryModeNag
{
    /**
     * Displays a notice when the user is in recovery mode.
     *
     * @since 5.2.0
     */
    public function wpRecoveryModeNag(): void;
}
