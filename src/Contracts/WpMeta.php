<?php

namespace WpService\Contracts;

interface WpMeta
{
    /**
     * Theme container function for the 'wp_meta' action.
     *
     * The {@see 'wp_meta'} action can have several purposes, depending on how you use it,
     * but one purpose might have been to allow for theme switching.
     *
     * @since 1.5.0
     *
     * @link https://core.trac.wordpress.org/ticket/1458 Explanation of 'wp_meta' action.
     */
    public function wpMeta(): void;
}
