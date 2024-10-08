<?php

namespace WpService\Contracts;

interface GetPlugins
{
    /**
     * Checks the plugins directory and retrieve all plugin files with plugin data.
     *
     * WordPress only supports plugin files in the base plugins directory
     * (wp-content/plugins) and in one directory above the plugins directory
     * (wp-content/plugins/my-plugin). The file it looks for has the plugin data
     * and must be found in those two locations. It is recommended to keep your
     * plugin files in their own directories.
     *
     * The file with the plugin data is the file that will be included and therefore
     * needs to have the main execution for the plugin. This does not mean
     * everything must be contained in the file and it is recommended that the file
     * be split for maintainability. Keep everything in one file for extreme
     * optimization purposes.
     *
     * @since 1.5.0
     *
     * @param string $pluginFolder Optional. Relative path to single plugin folder.
     * @return array[] Array of arrays of plugin data, keyed by plugin file name. See get_plugin_data().
     */
    public function getPlugins(string $pluginFolder = ''): array;
}
