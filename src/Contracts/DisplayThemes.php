<?php

namespace WpService\Contracts;

interface DisplayThemes
{
    /**
 * Displays theme content based on theme list.
 *
 * @since 2.8.0
 *
 * @global WP_Theme_Install_List_Table $wp_list_table
 */
    public function displayThemes(): void;
}
