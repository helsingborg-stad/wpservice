<?php

namespace WpService\Contracts;

interface WpMakePluginFileTree
{
    /**
 * Makes a tree structure for the plugin file editor's file list.
 *
 * @since 4.9.0
 * @access private
 *
 * @param array $pluginEditableFiles List of plugin file paths.
 * @return array Tree structure for listing plugin files.
 */
    public function wpMakePluginFileTree(array $pluginEditableFiles): array;
}
