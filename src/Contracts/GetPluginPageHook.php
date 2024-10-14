<?php

namespace WpService\Contracts;

interface GetPluginPageHook
{
/**
 * Gets the hook attached to the administrative page of a plugin.
 *
 * @since 1.5.0
 *
 * @param string $pluginPage The slug name of the plugin page.
 * @param string $parentPage The slug name for the parent menu (or the file name of a standard
 *                            WordPress admin page).
 * @return string|null Hook attached to the plugin page, null otherwise.
 */
    public function getPluginPageHook(string $pluginPage, string $parentPage): string|null;
}
