<?php

namespace WpService\Contracts;

interface WpPrintThemeFileTree
{
    /**
 * Outputs the formatted file list for the theme file editor.
 *
 * @since 4.9.0
 * @access private
 *
 * @global string $relative_file Name of the file being edited relative to the
 *                               theme directory.
 * @global string $stylesheet    The stylesheet name of the theme being edited.
 *
 * @param array|string $tree  List of file/folder paths, or filename.
 * @param int $level The aria-level for the current iteration.
 * @param int $size  The aria-setsize for the current iteration.
 * @param int $index The aria-posinset for the current iteration.
 */
    public function wpPrintThemeFileTree(array|string $tree, int $level, int $size, int $index): void;
}
