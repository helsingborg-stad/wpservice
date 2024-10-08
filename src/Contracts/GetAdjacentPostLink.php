<?php

namespace WpService\Contracts;

interface GetAdjacentPostLink
{
    /**
     * Retrieves the adjacent post link.
     *
     * Can be either next post link or previous.
     *
     * @since 3.7.0
     *
     * @param string $format         Link anchor format.
     * @param string $link           Link permalink format.
     * @param bool $inSameTerm   Optional. Whether link should be in the same taxonomy term.
     *                                     Default false.
     * @param int[]|string $excludedTerms Optional. Array or comma-separated list of excluded terms IDs.
     *                                     Default empty.
     * @param bool $previous       Optional. Whether to display link to previous or next post.
     *                                     Default true.
     * @param string $taxonomy       Optional. Taxonomy, if `$in_same_term` is true. Default 'category'.
     * @return string The link URL of the previous or next post in relation to the current post.
     */
    public function getAdjacentPostLink(string $format, string $link, bool $inSameTerm = false, array|string $excludedTerms = '', bool $previous = true, string $taxonomy = 'category'): string;
}
