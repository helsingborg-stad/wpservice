<?php

namespace WpService\Contracts;

interface TheTerms
{
    /**
 * Displays the terms for a post in a list.
 *
 * @since 2.5.0
 *
 * @param int $postId  Post ID.
 * @param string $taxonomy Taxonomy name.
 * @param string $before   Optional. String to use before the terms. Default empty.
 * @param string $sep      Optional. String to use between the terms. Default ', '.
 * @param string $after    Optional. String to use after the terms. Default empty.
 * @return void|false Void on success, false on failure.
 */
    public function theTerms(int $postId, string $taxonomy, string $before = '', string $sep = ', ', string $after = ''): mixed;
}
