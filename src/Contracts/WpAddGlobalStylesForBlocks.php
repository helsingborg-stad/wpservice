<?php

namespace WpService\Contracts;

interface WpAddGlobalStylesForBlocks
{
    /**
 * Adds global style rules to the inline style for each block.
 *
 * @since 6.1.0
 *
 * @global WP_Styles $wp_styles
 */
    public function wpAddGlobalStylesForBlocks(): void;
}
