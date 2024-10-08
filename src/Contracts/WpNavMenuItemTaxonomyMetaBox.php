<?php

namespace WpService\Contracts;

interface WpNavMenuItemTaxonomyMetaBox
{
    /**
     * Displays a meta box for a taxonomy menu item.
     *
     * @since 3.0.0
     *
     * @global int|string $nav_menu_selected_id
     *
     * @param string $dataObject Not used.
     * @param array $box {
     *     Taxonomy menu item meta box arguments.
     *
     * @type string   $id       Meta box 'id' attribute.
     * @type string   $title    Meta box title.
     * @type callable $callback Meta box display callback.
     * @type object   $args     Extra meta box arguments (the taxonomy object for this meta box).
     * }
     */
    public function wpNavMenuItemTaxonomyMetaBox(string $dataObject, array $box): void;
}
