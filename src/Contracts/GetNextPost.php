<?php

namespace WpService\Contracts;

interface GetNextPost
{
    /**
 * Retrieves the next post that is adjacent to the current post.
 *
 * @since 1.5.0
 *
 * @param bool $inSameTerm   Optional. Whether post should be in the same taxonomy term.
 *                                     Default false.
 * @param int[]|string $excludedTerms Optional. Array or comma-separated list of excluded term IDs.
 *                                     Default empty.
 * @param string $taxonomy       Optional. Taxonomy, if `$in_same_term` is true. Default 'category'.
 * @return \WP_Post|null|string Post object if successful. Null if global `$post` is not set.
 *                             Empty string if no corresponding post exists.
 */
    public function getNextPost(bool $inSameTerm, array|string $excludedTerms, string $taxonomy): \WP_Post|null|string;
}
