<?php

namespace WpService\Contracts;

interface WpNavMenuItemPostTypeMetaBox
{
    /**
 * Displays a meta box for a post type menu item.
 *
 * @since 3.0.0
 *
 * @global int        $_nav_menu_placeholder
 * @global int|string $nav_menu_selected_id
 *
 * @param string $dataObject Not used.
 * @param array $box {
 *     Post type menu item meta box arguments.
 *
 *     @type string       $id       Meta box 'id' attribute.
 *     @type string       $title    Meta box title.
 *     @type callable     $callback Meta box display callback.
 *     @type WP_Post_Type $args     Extra meta box arguments (the post type object for this meta box).
 * }
 */
    public function wpNavMenuItemPostTypeMetaBox(string $dataObject, array $box): void;
}
