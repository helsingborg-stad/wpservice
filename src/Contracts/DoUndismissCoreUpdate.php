<?php

namespace WpService\Contracts;

interface DoUndismissCoreUpdate
{
    /**
     * Undismiss a core update.
     *
     * @since 2.7.0
     */
    public function doUndismissCoreUpdate(): void;
}
