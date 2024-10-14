<?php

namespace WpService\Contracts;

interface InstallThemeInformation
{
/**
 * Displays theme information in dialog box form.
 *
 * @since 2.8.0
 *
 * @global WP_Theme_Install_List_Table $wp_list_table
 */
    public function installThemeInformation(): void;
}
