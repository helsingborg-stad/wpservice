<?php

namespace WpService\Contracts;

interface AdjacentPostsRelLink
{
    /**
 * Displays the relational links for the posts adjacent to the current post.
 *
 * @since 2.8.0
 *
 * @param string $title          Optional. Link title format. Default '%title'.
 * @param bool $inSameTerm   Optional. Whether link should be in the same taxonomy term.
 *                                     Default false.
 * @param int[]|string $excludedTerms Optional. Array or comma-separated list of excluded term IDs.
 *                                     Default empty.
 * @param string $taxonomy       Optional. Taxonomy, if `$in_same_term` is true. Default 'category'.
 */
    public function adjacentPostsRelLink(string $title = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): void;
}
