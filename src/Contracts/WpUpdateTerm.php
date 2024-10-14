<?php

namespace WpService\Contracts;

interface WpUpdateTerm
{
/**
 * Updates term based on arguments provided.
 *
 * The `$args` will indiscriminately override all values with the same field name.
 * Care must be taken to not override important information need to update or
 * update will fail (or perhaps create a new term, neither would be acceptable).
 *
 * Defaults will set 'alias_of', 'description', 'parent', and 'slug' if not
 * defined in `$args` already.
 *
 * 'alias_of' will create a term group, if it doesn't already exist, and
 * update it for the `$term`.
 *
 * If the 'slug' argument in `$args` is missing, then the 'name' will be used.
 * If you set 'slug' and it isn't unique, then a WP_Error is returned.
 * If you don't pass any slug, then a unique one will be created.
 *
 * @since 2.3.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $termId  The ID of the term.
 * @param string $taxonomy The taxonomy of the term.
 * @param array $args {
 *     Optional. Array of arguments for updating a term.
 *
 * @type string $alias_of    Slug of the term to make this term an alias of.
 *                               Default empty string. Accepts a term slug.
 * @type string $description The term description. Default empty string.
 * @type int    $parent      The id of the parent term. Default 0.
 * @type string $slug        The term slug to use. Default empty string.
 * }
 * @return array|\WP_Error An array containing the `term_id` and `term_taxonomy_id`,
 *                        WP_Error otherwise.
 */
    public function wpUpdateTerm(int $termId, string $taxonomy, array $args = []): array|\WP_Error;
}
