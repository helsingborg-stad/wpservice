<?php

namespace WpService\Contracts;

interface NextPostLink
{
    /**
 * Displays the next post link that is adjacent to the current post.
 *
 * @since 1.5.0
 *
 * @see get_next_post_link()
 *
 * @param string $format         Optional. Link anchor format. Default '&laquo; %link'.
 * @param string $link           Optional. Link permalink format. Default '%title'.
 * @param bool $inSameTerm   Optional. Whether link should be in the same taxonomy term.
 *                                     Default false.
 * @param int[]|string $excludedTerms Optional. Array or comma-separated list of excluded term IDs.
 *                                     Default empty.
 * @param string $taxonomy       Optional. Taxonomy, if `$in_same_term` is true. Default 'category'.
 */
    public function nextPostLink(string $format = '%link &raquo;', string $link = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): void;
}
