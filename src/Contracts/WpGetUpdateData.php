<?php

namespace WpService\Contracts;

interface WpGetUpdateData
{
/**
 * Collects counts and UI strings for available updates.
 *
 * @since 3.3.0
 *
 * @return array
 */
    public function wpGetUpdateData(): array;
}
