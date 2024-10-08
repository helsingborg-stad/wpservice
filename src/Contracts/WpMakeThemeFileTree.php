<?php

namespace WpService\Contracts;

interface WpMakeThemeFileTree
{
    /**
 * Makes a tree structure for the theme file editor's file list.
 *
 * @since 4.9.0
 * @access private
 *
 * @param array $allowedFiles List of theme file paths.
 * @return array Tree structure for listing theme files.
 */
    public function wpMakeThemeFileTree(array $allowedFiles): array;
}
