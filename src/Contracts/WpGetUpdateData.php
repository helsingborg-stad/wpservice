<?php

namespace WpService\Contracts;

interface WpGetUpdateData
{
/**
 * Collects counts and UI strings for available updates.
 *
 * @since 3.3.0
 *
 * @return array {
 *     Fetched update data.
 *
 * @type int[]   $counts       An array of counts for available plugin, theme, and WordPress updates.
 * @type string  $update_title Titles of available updates.
 * }
 */
    public function wpGetUpdateData(): array;
}
