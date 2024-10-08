<?php

namespace WpService\Contracts;

interface ListPluginUpdates
{
    /**
     * Display the upgrade plugins form.
     *
     * @since 2.9.0
     */
    public function listPluginUpdates(): void;
}
