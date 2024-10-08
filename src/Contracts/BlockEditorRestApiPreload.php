<?php

namespace WpService\Contracts;

interface BlockEditorRestApiPreload
{
    /**
 * Preloads common data used with the block editor by specifying an array of
 * REST API paths that will be preloaded for a given block editor context.
 *
 * @since 5.8.0
 *
 * @global WP_Post    $post       Global post object.
 * @global WP_Scripts $wp_scripts The WP_Scripts object for printing scripts.
 * @global WP_Styles  $wp_styles  The WP_Styles object for printing styles.
 *
 * @param (string|string[])[] $preloadPaths        List of paths to preload.
 * @param \WP_Block_Editor_Context $blockEditorContext The current block editor context.
 */
    public function blockEditorRestApiPreload(string|array $preloadPaths, \WP_Block_Editor_Context $blockEditorContext): void;
}
