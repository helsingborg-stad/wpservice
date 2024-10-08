<?php

namespace WpService\Contracts;

interface WpResolveNumericSlugConflicts
{
    /**
     * Resolves numeric slugs that collide with date permalinks.
     *
     * Permalinks of posts with numeric slugs can sometimes look to WP_Query::parse_query()
     * like a date archive, as when your permalink structure is `/%year%/%postname%/` and
     * a post with post_name '05' has the URL `/2015/05/`.
     *
     * This function detects conflicts of this type and resolves them in favor of the
     * post permalink.
     *
     * Note that, since 4.3.0, wp_unique_post_slug() prevents the creation of post slugs
     * that would result in a date archive conflict. The resolution performed in this
     * function is primarily for legacy content, as well as cases when the admin has changed
     * the site's permalink structure in a way that introduces URL conflicts.
     *
     * @since 4.3.0
     *
     * @param array $queryVars Optional. Query variables for setting up the loop, as determined in
     *                          WP::parse_request(). Default empty array.
     * @return array Returns the original array of query vars, with date/post conflicts resolved.
     */
    public function wpResolveNumericSlugConflicts(array $queryVars = []): array;
}
