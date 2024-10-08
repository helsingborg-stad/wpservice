<?php

namespace WpService\Contracts;

interface GetPluginPageHookname
{
    /**
 * Gets the hook name for the administrative page of a plugin.
 *
 * @since 1.5.0
 *
 * @global array $admin_page_hooks
 *
 * @param string $pluginPage The slug name of the plugin page.
 * @param string $parentPage The slug name for the parent menu (or the file name of a standard
 *                            WordPress admin page).
 * @return string Hook name for the plugin page.
 */
    public function getPluginPageHookname(string $pluginPage, string $parentPage): string;
}
