<?php

namespace WpService\Contracts;

interface GetThemeMods
{
    /**
     * Retrieves all theme modifications.
     *
     * @since 3.1.0
     * @since 5.9.0 The return value is always an array.
     *
     * @return array Theme modifications.
     */
    public function getThemeMods(): array;
}
