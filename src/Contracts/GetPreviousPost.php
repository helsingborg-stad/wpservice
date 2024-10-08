<?php

namespace WpService\Contracts;

interface GetPreviousPost
{
    /**
     * Retrieves the previous post that is adjacent to the current post.
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
    public function getPreviousPost(bool $inSameTerm = false, array|string $excludedTerms = '', string $taxonomy = 'category'): \WP_Post|null|string;
}
