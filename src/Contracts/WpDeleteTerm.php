<?php

namespace WpService\Contracts;

interface WpDeleteTerm
{
    /**
     * Removes a term from the database.
     *
     * If the term is a parent of other terms, then the children will be updated to
     * that term's parent.
     *
     * Metadata associated with the term will be deleted.
     *
     * @since 2.3.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $term     Term ID.
     * @param string $taxonomy Taxonomy name.
     * @param array|string $args {
     *     Optional. Array of arguments to override the default term ID. Default empty array.
     *
     * @type int  $default       The term ID to make the default term. This will only override
     *                               the terms found if there is only one term found. Any other and
     *                               the found terms are used.
     * @type bool $force_default Optional. Whether to force the supplied term as default to be
     *                               assigned even if the object was not going to be term-less.
     *                               Default false.
     * }
     * @return bool|int|\WP_Error True on success, false if term does not exist. Zero on attempted
     *                           deletion of default Category. WP_Error if the taxonomy does not exist.
     */
    public function wpDeleteTerm(int $term, string $taxonomy, array|string $args = []): bool|int|\WP_Error;
}
