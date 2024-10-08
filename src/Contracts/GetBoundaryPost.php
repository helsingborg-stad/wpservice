<?php

namespace WpService\Contracts;

interface GetBoundaryPost
{
    /**
 * Retrieves the boundary post.
 *
 * Boundary being either the first or last post by publish date within the constraints specified
 * by `$in_same_term` or `$excluded_terms`.
 *
 * @since 2.8.0
 *
 * @param bool $inSameTerm   Optional. Whether returned post should be in the same taxonomy term.
 *                                     Default false.
 * @param int[]|string $excludedTerms Optional. Array or comma-separated list of excluded term IDs.
 *                                     Default empty.
 * @param bool $start          Optional. Whether to retrieve first or last post.
 *                                     Default true.
 * @param string $taxonomy       Optional. Taxonomy, if `$in_same_term` is true. Default 'category'.
 * @return array|null Array containing the boundary post object if successful, null otherwise.
 */
    public function getBoundaryPost(bool $inSameTerm, array|string $excludedTerms, bool $start, string $taxonomy): array|null;
}
