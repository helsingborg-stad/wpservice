<?php

namespace WpService\Contracts;

interface EnqueueBlockStylesAssets
{
    /**
     * Function responsible for enqueuing the styles required for block styles functionality on the editor and on the frontend.
     *
     * @since 5.3.0
     *
     * @global WP_Styles $wp_styles
     */
    public function enqueueBlockStylesAssets(): void;
}
