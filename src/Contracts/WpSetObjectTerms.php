<?php

namespace WpService\Contracts;

interface WpSetObjectTerms
{
    /**
 * Creates term and taxonomy relationships.
 *
 * Relates an object (post, link, etc.) to a term and taxonomy type. Creates the
 * term and taxonomy relationship if it doesn't already exist. Creates a term if
 * it doesn't exist (using the slug).
 *
 * A relationship means that the term is grouped in or belongs to the taxonomy.
 * A term has no meaning until it is given context by defining which taxonomy it
 * exists under.
 *
 * @since 2.3.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $objectId The object to relate to.
 * @param string|int|array $terms     A single term slug, single term ID, or array of either term slugs or IDs.
 *                                    Will replace all existing related terms in this taxonomy. Passing an
 *                                    empty array will remove all related terms.
 * @param string $taxonomy  The context in which to relate the term to the object.
 * @param bool $append    Optional. If false will delete difference of terms. Default false.
 * @return array|\WP_Error Term taxonomy IDs of the affected terms or WP_Error on failure.
 */
    public function wpSetObjectTerms(int $objectId, string|int|array $terms, string $taxonomy, bool $append): array|\WP_Error;
}
