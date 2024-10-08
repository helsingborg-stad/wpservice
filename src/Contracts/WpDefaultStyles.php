<?php

namespace WpService\Contracts;

interface WpDefaultStyles
{
    /**
     * Assigns default styles to $styles object.
     *
     * Nothing is returned, because the $styles parameter is passed by reference.
     * Meaning that whatever object is passed will be updated without having to
     * reassign the variable that was passed back to the same value. This saves
     * memory.
     *
     * Adding default styles is not the only task, it also assigns the base_url
     * property, the default version, and text direction for the object.
     *
     * @since 2.6.0
     *
     * @global array $editor_styles
     *
     * @param \WP_Styles $styles
     */
    public function wpDefaultStyles(\WP_Styles $styles): void;
}
