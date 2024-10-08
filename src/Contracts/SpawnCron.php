<?php

namespace WpService\Contracts;

interface SpawnCron
{
    /**
 * Sends a request to run cron through HTTP request that doesn't halt page loading.
 *
 * @since 2.1.0
 * @since 5.1.0 Return values added.
 *
 * @param int $gmtTime Optional. Unix timestamp (UTC). Default 0 (current time is used).
 * @return bool True if spawned, false if no events spawned.
 */
    public function spawnCron(int $gmtTime = 0): bool;
}
