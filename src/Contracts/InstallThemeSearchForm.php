<?php

namespace WpService\Contracts;

interface InstallThemeSearchForm
{
    /**
     * Displays search form for searching themes.
     *
     * @since 2.8.0
     *
     * @param bool $typeSelector
     */
    public function installThemeSearchForm(bool $typeSelector = true): void;
}
