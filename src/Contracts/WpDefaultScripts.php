<?php

namespace WpService\Contracts;

interface WpDefaultScripts
{
    /**
     * Registers all WordPress scripts.
     *
     * Localizes some of them.
     * args order: `$scripts->add( 'handle', 'url', 'dependencies', 'query-string', 1 );`
     * when last arg === 1 queues the script for the footer
     *
     * @since 2.6.0
     *
     * @param \WP_Scripts $scripts WP_Scripts object.
     */
    public function wpDefaultScripts(\WP_Scripts $scripts): void;
}
