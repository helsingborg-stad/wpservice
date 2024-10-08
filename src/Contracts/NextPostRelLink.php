<?php

namespace WpService\Contracts;

interface NextPostRelLink
{
    /**
 * Displays the relational link for the next post adjacent to the current post.
 *
 * @since 2.8.0
 *
 * @see get_adjacent_post_rel_link()
 *
 * @param string $title          Optional. Link title format. Default '%title'.
 * @param bool $inSameTerm   Optional. Whether link should be in the same taxonomy term.
 *                                     Default false.
 * @param int[]|string $excludedTerms Optional. Array or comma-separated list of excluded term IDs.
 *                                     Default empty.
 * @param string $taxonomy       Optional. Taxonomy, if `$in_same_term` is true. Default 'category'.
 */
    public function nextPostRelLink(string $title = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): void;
}
