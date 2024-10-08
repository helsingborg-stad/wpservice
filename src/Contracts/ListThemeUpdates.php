<?php

namespace WpService\Contracts;

interface ListThemeUpdates
{
    /**
     * Display the upgrade themes form.
     *
     * @since 2.9.0
     */
    public function listThemeUpdates(): void;
}
