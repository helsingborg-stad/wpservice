<?php

namespace WpService\Contracts;

interface RestApiRegisterRewrites
{
    /**
     * Adds REST rewrite rules.
     *
     * @since 4.4.0
     *
     * @see add_rewrite_rule()
     * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
     */
    public function restApiRegisterRewrites(): void;
}
