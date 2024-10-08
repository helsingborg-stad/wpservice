<?php

namespace WpService\Contracts;

interface WpMaybeAutoUpdate
{
    /**
     * Performs WordPress automatic background updates.
     *
     * Updates WordPress core plus any plugins and themes that have automatic updates enabled.
     *
     * @since 3.7.0
     */
    public function wpMaybeAutoUpdate(): void;
}
