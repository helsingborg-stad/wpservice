<?php

namespace WpService\Contracts;

interface GetBlockEditorThemeStyles
{
/**
 * Creates an array of theme styles to load into the block editor.
 *
 * @since 5.8.0
 *
 * @global array $editor_styles
 *
 * @return array An array of theme styles for the block editor.
 */
    public function getBlockEditorThemeStyles(): array;
}
