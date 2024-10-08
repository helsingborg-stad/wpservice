<?php

namespace WpService\Contracts;

interface WpHeartbeatSettings
{
    /**
 * Default settings for heartbeat.
 *
 * Outputs the nonce used in the heartbeat XHR.
 *
 * @since 3.6.0
 *
 * @param array $settings
 * @return array Heartbeat settings.
 */
    public function wpHeartbeatSettings(array $settings): array;
}
