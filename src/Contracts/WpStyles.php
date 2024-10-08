<?php

namespace WpService\Contracts;

interface WpStyles
{
    /**
     * Initializes $wp_styles if it has not been set.
     *
     * @since 4.2.0
     *
     * @global WP_Styles $wp_styles
     *
     * @return \WP_Styles WP_Styles instance.
     */
    public function wpStyles(): \WP_Styles;
}
