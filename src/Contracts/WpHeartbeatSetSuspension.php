<?php

namespace WpService\Contracts;

interface WpHeartbeatSetSuspension
{
    /**
 * Disables suspension of Heartbeat on the Add/Edit Post screens.
 *
 * @since 3.8.0
 *
 * @global string $pagenow The filename of the current screen.
 *
 * @param array $settings An array of Heartbeat settings.
 * @return array Filtered Heartbeat settings.
 */
    public function wpHeartbeatSetSuspension(array $settings): array;
}
