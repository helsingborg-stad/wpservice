<?php

namespace WpService\Contracts;

interface WpIsRecoveryMode
{
    /**
     * Determines whether WordPress is in Recovery Mode.
     *
     * In this mode, plugins or themes that cause WSODs will be paused.
     *
     * @since 5.2.0
     *
     * @return bool
     */
    public function wpIsRecoveryMode(): bool;
}
