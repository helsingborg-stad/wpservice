<?php

namespace WpService\Contracts;

interface WpTagCloud
{
    /**
 * Displays a tag cloud.
 *
 * Outputs a list of tags in what is called a 'tag cloud', where the size of each tag
 * is determined by how many times that particular tag has been assigned to posts.
 *
 * @since 2.3.0
 * @since 2.8.0 Added the `taxonomy` argument.
 * @since 4.8.0 Added the `show_count` argument.
 *
 * @param array|string $args {
 *     Optional. Array or string of arguments for displaying a tag cloud. See wp_generate_tag_cloud()
 *     and get_terms() for the full lists of arguments that can be passed in `$args`.
 *
 *     @type int    $number    The number of tags to display. Accepts any positive integer
 *                             or zero to return all. Default 45.
 *     @type string $link      Whether to display term editing links or term permalinks.
 *                             Accepts 'edit' and 'view'. Default 'view'.
 *     @type string $post_type The post type. Used to highlight the proper post type menu
 *                             on the linked edit page. Defaults to the first post type
 *                             associated with the taxonomy.
 *     @type bool   $echo      Whether or not to echo the return value. Default true.
 * }
 * @return void|string|string[] Void if 'echo' argument is true, or on failure. Otherwise, tag cloud
 *                              as a string or an array, depending on 'format' argument.
 */
    public function wpTagCloud(array|string $args = ''): mixed;
}
