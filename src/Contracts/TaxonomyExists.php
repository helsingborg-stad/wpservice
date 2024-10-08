<?php

namespace WpService\Contracts;

interface TaxonomyExists
{
    /**
 * Determines whether the taxonomy name exists.
 *
 * Formerly is_taxonomy(), introduced in 2.3.0.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 3.0.0
 *
 * @global WP_Taxonomy[] $wp_taxonomies The registered taxonomies.
 *
 * @param string $taxonomy Name of taxonomy object.
 * @return bool Whether the taxonomy exists.
 */
    public function taxonomyExists(string $taxonomy): bool;
}
