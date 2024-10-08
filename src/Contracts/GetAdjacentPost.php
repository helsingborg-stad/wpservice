<?php

namespace WpService\Contracts;

interface GetAdjacentPost
{
    /**
 * Retrieves the adjacent post.
 *
 * Can either be next or previous post.
 *
 * @since 2.5.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param bool $inSameTerm   Optional. Whether post should be in the same taxonomy term.
 *                                     Default false.
 * @param int[]|string $excludedTerms Optional. Array or comma-separated list of excluded term IDs.
 *                                     Default empty string.
 * @param bool $previous       Optional. Whether to retrieve previous post.
 *                                     Default true.
 * @param string $taxonomy       Optional. Taxonomy, if `$in_same_term` is true. Default 'category'.
 * @return \WP_Post|null|string Post object if successful. Null if global `$post` is not set.
 *                             Empty string if no corresponding post exists.
 */
    public function getAdjacentPost(bool $inSameTerm = false, array|string $excludedTerms = '', bool $previous = true, string $taxonomy = 'category'): \WP_Post|null|string;
}
