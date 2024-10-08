<?php

namespace WpService\Contracts;

interface WpEnqueueBlockSupportStyles
{
    /**
     * Hooks inline styles in the proper place, depending on the active theme.
     *
     * @since 5.9.1
     * @since 6.1.0 Added the `$priority` parameter.
     *
     * For block themes, styles are loaded in the head.
     * For classic ones, styles are loaded in the body because the wp_head action happens before render_block.
     *
     * @link https://core.trac.wordpress.org/ticket/53494.
     *
     * @param string $style    String containing the CSS styles to be added.
     * @param int $priority To set the priority for the add_action.
     */
    public function wpEnqueueBlockSupportStyles(string $style, int $priority = 10): void;
}
