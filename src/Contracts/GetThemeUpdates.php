<?php

namespace WpService\Contracts;

interface GetThemeUpdates
{
    /**
     * Retrieves themes with updates available.
     *
     * @since 2.9.0
     *
     * @return array
     */
    public function getThemeUpdates(): array;
}
