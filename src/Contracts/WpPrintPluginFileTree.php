<?php

namespace WpService\Contracts;

interface WpPrintPluginFileTree
{
    /**
 * Outputs the formatted file list for the plugin file editor.
 *
 * @since 4.9.0
 * @access private
 *
 * @param array|string $tree  List of file/folder paths, or filename.
 * @param string $label Name of file or folder to print.
 * @param int $level The aria-level for the current iteration.
 * @param int $size  The aria-setsize for the current iteration.
 * @param int $index The aria-posinset for the current iteration.
 */
    public function wpPrintPluginFileTree(array|string $tree, string $label = '', int $level = 2, int $size = 1, int $index = 1): void;
}
