<?php

namespace WpService\Contracts;

interface GetTheTermList
{
    /**
 * Retrieves a post's terms as a list with specified format.
 *
 * Terms are linked to their respective term listing pages.
 *
 * @since 2.5.0
 *
 * @param int $postId  Post ID.
 * @param string $taxonomy Taxonomy name.
 * @param string $before   Optional. String to use before the terms. Default empty.
 * @param string $sep      Optional. String to use between the terms. Default empty.
 * @param string $after    Optional. String to use after the terms. Default empty.
 * @return string|false|\WP_Error A list of terms on success, false if there are no terms,
 *                               WP_Error on failure.
 */
    public function getTheTermList(int $postId, string $taxonomy, string $before, string $sep, string $after): string|false|\WP_Error;
}
