<?php

namespace WpService\Contracts;

interface AddMetaBox
{
    /**
     * Adds a meta box to one or more screens.
     *
     * @since 2.5.0
     * @since 4.4.0 The `$screen` parameter now accepts an array of screen IDs.
     *
     * @global array $wp_meta_boxes Global meta box state.
     *
     * @param string $id            Meta box ID (used in the 'id' attribute for the meta box).
     * @param string $title         Title of the meta box.
     * @param callable $callback      Function that fills the box with the desired content.
     *                                              The function should echo its output.
     * @param string|array|\WP_Screen $screen        Optional. The screen or screens on which to show the box
     *                                              (such as a post type, 'link', or 'comment'). Accepts a single
     *                                              screen ID, WP_Screen object, or array of screen IDs. Default
     *                                              is the current screen.  If you have used add_menu_page() or
     *                                              add_submenu_page() to create a new screen (and hence screen_id),
     *                                              make sure your menu slug conforms to the limits of sanitize_key()
     *                                              otherwise the 'screen' menu may not correctly render on your page.
     * @param string $context       Optional. The context within the screen where the box
     *                                              should display. Available contexts vary from screen to
     *                                              screen. Post edit screen contexts include 'normal', 'side',
     *                                              and 'advanced'. Comments screen contexts include 'normal'
     *                                              and 'side'. Menus meta boxes (accordion sections) all use
     *                                              the 'side' context. Global default is 'advanced'.
     * @param string $priority      Optional. The priority within the context where the box should show.
     *                                              Accepts 'high', 'core', 'default', or 'low'. Default 'default'.
     * @param array $callbackArgs Optional. Data that should be set as the $args property
     *                                              of the box array (which is the second parameter passed
     *                                              to your callback). Default null.
     */
    public function addMetaBox(string $id, string $title, callable $callback, string|array|\WP_Screen $screen = null, string $context = 'advanced', string $priority = 'default', array $callbackArgs = null): void;
}
