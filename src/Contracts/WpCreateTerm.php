<?php

namespace WpService\Contracts;

interface WpCreateTerm
{
    /**
     * Adds a new term to the database if it does not already exist.
     *
     * @since 2.8.0
     *
     * @param string $tagName The term name.
     * @param string $taxonomy Optional. The taxonomy within which to create the term. Default 'post_tag'.
     * @return array|\WP_Error
     */
    public function wpCreateTerm(string $tagName, string $taxonomy = 'post_tag'): array|\WP_Error;
}
