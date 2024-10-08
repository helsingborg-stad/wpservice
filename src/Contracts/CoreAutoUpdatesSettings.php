<?php

namespace WpService\Contracts;

interface CoreAutoUpdatesSettings
{
    /**
 * Display WordPress auto-updates settings.
 *
 * @since 5.6.0
 */
    public function coreAutoUpdatesSettings(): void;
}
