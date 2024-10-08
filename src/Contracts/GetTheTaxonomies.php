<?php

namespace WpService\Contracts;

interface GetTheTaxonomies
{
    /**
 * Retrieves all taxonomies associated with a post.
 *
 * This function can be used within the loop. It will also return an array of
 * the taxonomies with links to the taxonomy and name.
 *
 * @since 2.5.0
 *
 * @param int|\WP_Post $post Optional. Post ID or WP_Post object. Default is global $post.
 * @param array $args {
 *           Optional. Arguments about how to format the list of taxonomies. Default empty array.
 *
 *     @type string $template      Template for displaying a taxonomy label and list of terms.
 *                                 Default is "Label: Terms."
 *     @type string $term_template Template for displaying a single term in the list. Default is the term name
 *                                 linked to its archive.
 * }
 * @return string[] List of taxonomies.
 */
    public function getTheTaxonomies(int|\WP_Post $post, array $args): array;
}
