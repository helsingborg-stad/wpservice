<?php

namespace WpService\Contracts;

interface GetTermToEdit
{
/**
 * Sanitizes term for editing.
 *
 * Return value is sanitize_term() and usage is for sanitizing the term for
 * editing. Function is for contextual and simplicity.
 *
 * @since 2.3.0
 *
 * @param int|object $id       Term ID or object.
 * @param string $taxonomy Taxonomy name.
 * @return string|int|null|\WP_Error Will return empty string if $term is not an object.
 */
    public function getTermToEdit(int|object $id, string $taxonomy): string|int|null|\WP_Error;
}
