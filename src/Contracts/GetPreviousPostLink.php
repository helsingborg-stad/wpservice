<?php

namespace WpService\Contracts;

interface GetPreviousPostLink
{
/**
 * Retrieves the previous post link that is adjacent to the current post.
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
 * @return string The link URL of the previous post in relation to the current post.
 */
    public function getPreviousPostLink(string $format = '&laquo; %link', string $link = '%title', bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): string;
}
