<?php

namespace WpService\Contracts;

interface GetThemeMods
{
    /**
     * Retrieves all theme modifications.
     *
     * @return array Theme modifications.
     */
    public function getThemeMods(): array;
}
