<?php

namespace WpService\Contracts;

interface IsPreview
{
    /**
     * Determines whether the query is for a post or page preview.
     *
     * For more information on this and similar theme functions, check out
     * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
     * Conditional Tags} article in the Theme Developer Handbook.
     *
     * @since 2.0.0
     *
     * @global WP_Query $wp_query WordPress Query object.
     *
     * @return bool Whether the query is for a post or page preview.
     */
    public function isPreview(): bool;
}
