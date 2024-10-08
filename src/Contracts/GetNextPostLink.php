<?php

namespace WpService\Contracts;

interface GetNextPostLink
{
    /**
 * Retrieves the next post link that is adjacent to the current post.
 *
 * @since 3.7.0
 *
 * @param string $format         Optional. Link anchor format. Default '&laquo; %link'.
 * @param string $link           Optional. Link permalink format. Default '%title'.
 * @param bool $inSameTerm   Optional. Whether link should be in the same taxonomy term.
 *                                     Default false.
 * @param int[]|string $excludedTerms Optional. Array or comma-separated list of excluded term IDs.
 *                                     Default empty.
 * @param string $taxonomy       Optional. Taxonomy, if `$in_same_term` is true. Default 'category'.
 * @return string The link URL of the next post in relation to the current post.
 */
    public function getNextPostLink(string $format = '%link &raquo;', string $link = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): string;
}
