<?php

namespace WpService\Contracts;

interface GetPages
{
/**
 * Retrieves an array of pages (or hierarchical post type items).
 *
 * @since 1.5.0
 * @since 6.3.0 Use WP_Query internally.
 *
 * @param array|string $args {
 *     Optional. Array or string of arguments to retrieve pages.
 *
 * @type int          $child_of     Page ID to return child and grandchild pages of. Note: The value
 *                                      of `$hierarchical` has no bearing on whether `$child_of` returns
 *                                      hierarchical results. Default 0, or no restriction.
 * @type string       $sort_order   How to sort retrieved pages. Accepts 'ASC', 'DESC'. Default 'ASC'.
 * @type string       $sort_column  What columns to sort pages by, comma-separated. Accepts 'post_author',
 *                                      'post_date', 'post_title', 'post_name', 'post_modified', 'menu_order',
 *                                      'post_modified_gmt', 'post_parent', 'ID', 'rand', 'comment_count'.
 *                                      'post_' can be omitted for any values that start with it.
 *                                      Default 'post_title'.
 * @type bool         $hierarchical Whether to return pages hierarchically. If false in conjunction with
 *                                      `$child_of` also being false, both arguments will be disregarded.
 *                                      Default true.
 * @type int[]        $exclude      Array of page IDs to exclude. Default empty array.
 * @type int[]        $include      Array of page IDs to include. Cannot be used with `$child_of`,
 *                                      `$parent`, `$exclude`, `$meta_key`, `$meta_value`, or `$hierarchical`.
 *                                      Default empty array.
 * @type string       $meta_key     Only include pages with this meta key. Default empty.
 * @type string       $meta_value   Only include pages with this meta value. Requires `$meta_key`.
 *                                      Default empty.
 * @type string       $authors      A comma-separated list of author IDs. Default empty.
 * @type int          $parent       Page ID to return direct children of. Default -1, or no restriction.
 * @type string|int[] $exclude_tree Comma-separated string or array of page IDs to exclude.
 *                                      Default empty array.
 * @type int          $number       The number of pages to return. Default 0, or all pages.
 * @type int          $offset       The number of pages to skip before returning. Requires `$number`.
 *                                      Default 0.
 * @type string       $post_type    The post type to query. Default 'page'.
 * @type string|array $post_status  A comma-separated list or array of post statuses to include.
 *                                      Default 'publish'.
 * }
 * @return WP_Post[]|false Array of pages (or hierarchical post type items). Boolean false if the
 *                         specified post type is not hierarchical or the specified status is not
 *                         supported by the post type.
 */
    public function getPages(array|string $args = []): array|false;
}
