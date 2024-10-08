<?php

namespace WpService\Contracts;

interface FindCoreAutoUpdate
{
    /**
     * Gets the best available (and enabled) Auto-Update for WordPress core.
     *
     * If there's 1.2.3 and 1.3 on offer, it'll choose 1.3 if the installation allows it, else, 1.2.3.
     *
     * @since 3.7.0
     *
     * @return object|false The core update offering on success, false on failure.
     */
    public function findCoreAutoUpdate(): object|false;
}
