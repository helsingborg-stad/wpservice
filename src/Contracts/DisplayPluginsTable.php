<?php

namespace WpService\Contracts;

interface DisplayPluginsTable
{
    /**
     * Displays plugin content based on plugin list.
     *
     * @since 2.7.0
     *
     * @global WP_List_Table $wp_list_table
     */
    public function displayPluginsTable(): void;
}
