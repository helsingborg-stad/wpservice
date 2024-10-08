<?php

namespace WpService\Contracts;

interface GetTermField
{
    /**
 * Gets sanitized term field.
 *
 * The function is for contextual reasons and for simplicity of usage.
 *
 * @since 2.3.0
 * @since 4.4.0 The `$taxonomy` parameter was made optional. `$term` can also now accept a WP_Term object.
 *
 * @see sanitize_term_field()
 *
 * @param string $field    Term field to fetch.
 * @param int|\WP_Term $term     Term ID or object.
 * @param string $taxonomy Optional. Taxonomy name. Default empty.
 * @param string $context  Optional. How to sanitize term fields. Look at sanitize_term_field() for available options.
 *                              Default 'display'.
 * @return string|int|null|\WP_Error Will return an empty string if $term is not an object or if $field is not set in $term.
 */
    public function getTermField(string $field, int|\WP_Term $term, string $taxonomy, string $context): string|int|null|\WP_Error;
}
