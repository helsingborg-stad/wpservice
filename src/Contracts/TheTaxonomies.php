<?php

namespace WpService\Contracts;

interface TheTaxonomies
{
    /**
 * Displays the taxonomies of a post with available options.
 *
 * This function can be used within the loop to display the taxonomies for a
 * post without specifying the Post ID. You can also use it outside the Loop to
 * display the taxonomies for a specific post.
 *
 * @since 2.5.0
 *
 * @param array $args {
 *     Arguments about which post to use and how to format the output. Shares all of the arguments
 *     supported by get_the_taxonomies(), in addition to the following.
 *
 *     @type int|WP_Post $post   Post ID or object to get taxonomies of. Default current post.
 *     @type string      $before Displays before the taxonomies. Default empty string.
 *     @type string      $sep    Separates each taxonomy. Default is a space.
 *     @type string      $after  Displays after the taxonomies. Default empty string.
 * }
 */
    public function theTaxonomies(array $args): void;
}
