<?php

namespace WpService\Contracts;

interface RegisterBlockStyle
{
    /**
     * Registers a new block style.
     *
     * @since 5.3.0
     * @since 6.6.0 Added support for registering styles for multiple block types.
     *
     * @link https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
     *
     * @param string|string[] $blockName       Block type name including namespace or array of namespaced block type names.
     * @param array $styleProperties Array containing the properties of the style name, label,
     *                                          style_handle (name of the stylesheet to be enqueued),
     *                                          inline_style (string containing the CSS to be added),
     *                                          style_data (theme.json-like array to generate CSS from).
     *                                          See WP_Block_Styles_Registry::register().
     * @return bool True if the block style was registered with success and false otherwise.
     */
    public function registerBlockStyle(string|array $blockName, array $styleProperties): bool;
}
