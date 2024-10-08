<?php

namespace WpService\Contracts;

interface AdjacentPostLink
{
    /**
 * Displays the adjacent post link.
 *
 * Can be either next post link or previous.
 *
 * @since 2.5.0
 *
 * @param string $format         Link anchor format.
 * @param string $link           Link permalink format.
 * @param bool $inSameTerm   Optional. Whether link should be in the same taxonomy term.
 *                                     Default false.
 * @param int[]|string $excludedTerms Optional. Array or comma-separated list of excluded category IDs.
 *                                     Default empty.
 * @param bool $previous       Optional. Whether to display link to previous or next post.
 *                                     Default true.
 * @param string $taxonomy       Optional. Taxonomy, if `$in_same_term` is true. Default 'category'.
 */
    public function adjacentPostLink(string $format, string $link, bool $inSameTerm, array|string $excludedTerms, bool $previous, string $taxonomy): void;
}
