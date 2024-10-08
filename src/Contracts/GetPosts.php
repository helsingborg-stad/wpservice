<?php

namespace WpService\Contracts;

interface GetPosts
{
    /**
 * Retrieves an array of the latest posts, or posts matching the given criteria.
 *
 * For more information on the accepted arguments, see the
 * {@link https://developer.wordpress.org/reference/classes/wp_query/
 * WP_Query} documentation in the Developer Handbook.
 *
 * The `$ignore_sticky_posts` and `$no_found_rows` arguments are ignored by
 * this function and both are set to `true`.
 *
 * The defaults are as follows:
 *
 * @since 1.2.0
 *
 * @see WP_Query
 * @see WP_Query::parse_query()
 *
 * @param array $args {
 *     Optional. Arguments to retrieve posts. See WP_Query::parse_query() for all available arguments.
 *
 *     @type int        $numberposts      Total number of posts to retrieve. Is an alias of `$posts_per_page`
 *                                        in WP_Query. Accepts -1 for all. Default 5.
 *     @type int|string $category         Category ID or comma-separated list of IDs (this or any children).
 *                                        Is an alias of `$cat` in WP_Query. Default 0.
 *     @type int[]      $include          An array of post IDs to retrieve, sticky posts will be included.
 *                                        Is an alias of `$post__in` in WP_Query. Default empty array.
 *     @type int[]      $exclude          An array of post IDs not to retrieve. Default empty array.
 *     @type bool       $suppress_filters Whether to suppress filters. Default true.
 * }
 * @return WP_Post[]|int[] Array of post objects or post IDs.
 */
    public function getPosts(array $args): array;
}
