<?php

namespace WpService\Contracts;

interface WpAjaxParseMediaShortcode
{
    /**
     * @since 4.0.0
     *
     * @global WP_Post    $post       Global post object.
     * @global WP_Scripts $wp_scripts
     */
    public function wpAjaxParseMediaShortcode(): void;
}
