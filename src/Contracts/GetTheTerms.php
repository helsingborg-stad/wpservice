<?php

namespace WpService\Contracts;

interface GetTheTerms
{
    /**
 * Retrieves the terms of the taxonomy that are attached to the post.
 *
 * @since 2.5.0
 *
 * @param int|\WP_Post $post     Post ID or object.
 * @param string $taxonomy Taxonomy name.
 * @return WP_Term[]|false|WP_Error Array of WP_Term objects on success, false if there are no terms
 *                                  or the post does not exist, WP_Error on failure.
 */
    public function getTheTerms(int|\WP_Post $post, string $taxonomy): array|false|\WP_Error;
}
