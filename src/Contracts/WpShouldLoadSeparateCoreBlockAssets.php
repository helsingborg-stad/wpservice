<?php

namespace WpService\Contracts;

interface WpShouldLoadSeparateCoreBlockAssets
{
    /**
     * Checks whether separate styles should be loaded for core blocks on-render.
     *
     * When this function returns true, other functions ensure that core blocks
     * only load their assets on-render, and each block loads its own, individual
     * assets. Third-party blocks only load their assets when rendered.
     *
     * When this function returns false, all core block assets are loaded regardless
     * of whether they are rendered in a page or not, because they are all part of
     * the `block-library/style.css` file. Assets for third-party blocks are always
     * enqueued regardless of whether they are rendered or not.
     *
     * This only affects front end and not the block editor screens.
     *
     * @see wp_enqueue_registered_block_scripts_and_styles()
     * @see register_block_style_handle()
     *
     * @since 5.8.0
     *
     * @return bool Whether separate assets will be loaded.
     */
    public function wpShouldLoadSeparateCoreBlockAssets(): bool;
}
