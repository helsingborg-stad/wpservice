<?php

namespace WpService\Contracts;

interface WpRemoveObjectTerms
{
    /**
     * Removes term(s) associated with a given object.
     *
     * @since 3.6.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $objectId The ID of the object from which the terms will be removed.
     * @param string|int|array $terms     The slug(s) or ID(s) of the term(s) to remove.
     * @param string $taxonomy  Taxonomy name.
     * @return bool|\WP_Error True on success, false or WP_Error on failure.
     */
    public function wpRemoveObjectTerms(int $objectId, string|int|array $terms, string $taxonomy): bool|\WP_Error;
}
