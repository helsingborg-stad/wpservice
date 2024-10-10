<?php

namespace WpService\Contracts;

interface WpSetPostTerms
{
    /**
     * Sets the terms for a post.
     *
     * @since 2.8.0
     *
     * @see wp_set_object_terms()
     *
     * @param int $postId  Optional. The Post ID. Does not default to the ID of the global $post.
     * @param string|array $terms    Optional. An array of terms to set for the post, or a string of terms
     *                               separated by commas. Hierarchical taxonomies must always pass IDs rather
     *                               than names so that children with the same names but different parents
     *                               aren't confused. Default empty.
     * @param string $taxonomy Optional. Taxonomy name. Default 'post_tag'.
     * @param bool $append   Optional. If true, don't delete existing terms, just add on. If false,
     *                               replace the terms with the new terms. Default false.
     * @return array|false|\WP_Error Array of term taxonomy IDs of affected terms. WP_Error or false on failure.
     */
    public function wpSetPostTerms(int $postId, string|array $terms = '', string $taxonomy = 'post_tag', bool $append = false): array|false|\WP_Error;
}
