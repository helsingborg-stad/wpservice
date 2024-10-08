<?php

namespace WpService\Contracts;

interface WpUseWidgetsBlockEditor
{
    /**
     * Whether or not to use the block editor to manage widgets. Defaults to true
     * unless a theme has removed support for widgets-block-editor or a plugin has
     * filtered the return value of this function.
     *
     * @since 5.8.0
     *
     * @return bool Whether to use the block editor to manage widgets.
     */
    public function wpUseWidgetsBlockEditor(): bool;
}
