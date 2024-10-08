<?php

namespace WpService\Contracts;

interface RemoveMetaBox
{
    /**
     * Removes a meta box from one or more screens.
     *
     * @since 2.6.0
     * @since 4.4.0 The `$screen` parameter now accepts an array of screen IDs.
     *
     * @global array $wp_meta_boxes Global meta box state.
     *
     * @param string $id      Meta box ID (used in the 'id' attribute for the meta box).
     * @param string|array|\WP_Screen $screen  The screen or screens on which the meta box is shown (such as a
     *                                        post type, 'link', or 'comment'). Accepts a single screen ID,
     *                                        WP_Screen object, or array of screen IDs.
     * @param string $context The context within the screen where the box is set to display.
     *                                        Contexts vary from screen to screen. Post edit screen contexts
     *                                        include 'normal', 'side', and 'advanced'. Comments screen contexts
     *                                        include 'normal' and 'side'. Menus meta boxes (accordion sections)
     *                                        all use the 'side' context.
     */
    public function removeMetaBox(string $id, string|array|\WP_Screen $screen, string $context): void;
}
