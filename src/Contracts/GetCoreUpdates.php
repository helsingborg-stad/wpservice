<?php

namespace WpService\Contracts;

interface GetCoreUpdates
{
    /**
 * Gets available core updates.
 *
 * @since 2.7.0
 *
 * @param array $options Set $options['dismissed'] to true to show dismissed upgrades too,
 *                       set $options['available'] to false to skip not-dismissed updates.
 * @return array|false Array of the update objects on success, false on failure.
 */
    public function getCoreUpdates(array $options): array|false;
}
