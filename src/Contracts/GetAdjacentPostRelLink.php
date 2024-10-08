<?php

namespace WpService\Contracts;

interface GetAdjacentPostRelLink
{
    /**
 * Retrieves the adjacent post relational link.
 *
 * Can either be next or previous post relational link.
 *
 * @since 2.8.0
 *
 * @param string $title          Optional. Link title format. Default '%title'.
 * @param bool $inSameTerm   Optional. Whether link should be in the same taxonomy term.
 *                                     Default false.
 * @param int[]|string $excludedTerms Optional. Array or comma-separated list of excluded term IDs.
 *                                     Default empty.
 * @param bool $previous       Optional. Whether to display link to previous or next post.
 *                                     Default true.
 * @param string $taxonomy       Optional. Taxonomy, if `$in_same_term` is true. Default 'category'.
 * @return string|void The adjacent post relational link URL.
 */
    public function getAdjacentPostRelLink(string $title, bool $inSameTerm, array|string $excludedTerms, bool $previous, string $taxonomy): string;
}
