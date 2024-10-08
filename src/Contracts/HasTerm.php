<?php

namespace WpService\Contracts;

interface HasTerm
{
    /**
 * Checks if the current post has any of given terms.
 *
 * The given terms are checked against the post's terms' term_ids, names and slugs.
 * Terms given as integers will only be checked against the post's terms' term_ids.
 *
 * If no terms are given, determines if post has any terms.
 *
 * @since 3.1.0
 *
 * @param string|int|array $term     Optional. The term name/term_id/slug,
 *                                   or an array of them to check for. Default empty.
 * @param string $taxonomy Optional. Taxonomy name. Default empty.
 * @param int|\WP_Post $post     Optional. Post to check. Defaults to the current post.
 * @return bool True if the current post has any of the given terms
 *              (or any term, if no term specified). False otherwise.
 */
    public function hasTerm(string|int|array $term = '', string $taxonomy = '', int|\WP_Post $post = null): bool;
}
