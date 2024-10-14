<?php

namespace WpService\Contracts;

interface WpListComments
{
/**
 * Displays a list of comments.
 *
 * Used in the comments.php template to list comments for a particular post.
 *
 * @since 2.7.0
 *
 * @see WP_Query::$comments
 *
 * @global WP_Query $wp_query           WordPress Query object.
 * @global int      $comment_alt
 * @global int      $comment_depth
 * @global int      $comment_thread_alt
 * @global bool     $overridden_cpage
 * @global bool     $in_comment_loop
 *
 * @param string|array $args {
 *     Optional. Formatting options.
 *
 * @type object   $walker            Instance of a Walker class to list comments. Default null.
 * @type int      $max_depth         The maximum comments depth. Default empty.
 * @type string   $style             The style of list ordering. Accepts 'ul', 'ol', or 'div'.
 *                                       'div' will result in no additional list markup. Default 'ul'.
 * @type callable $callback          Callback function to use. Default null.
 * @type callable $end-callback      Callback function to use at the end. Default null.
 * @type string   $type              Type of comments to list. Accepts 'all', 'comment',
 *                                       'pingback', 'trackback', 'pings'. Default 'all'.
 * @type int      $page              Page ID to list comments for. Default empty.
 * @type int      $per_page          Number of comments to list per page. Default empty.
 * @type int      $avatar_size       Height and width dimensions of the avatar size. Default 32.
 * @type bool     $reverse_top_level Ordering of the listed comments. If true, will display
 *                                       newest comments first. Default null.
 * @type bool     $reverse_children  Whether to reverse child comments in the list. Default null.
 * @type string   $format            How to format the comments list. Accepts 'html5', 'xhtml'.
 *                                       Default 'html5' if the theme supports it.
 * @type bool     $short_ping        Whether to output short pings. Default false.
 * @type bool     $echo              Whether to echo the output or return it. Default true.
 * }
 * @param WP_Comment[] $comments Optional. Array of WP_Comment objects. Default null.
 * @return void|string Void if 'echo' argument is true, or no comments to list.
 *                     Otherwise, HTML list of comments.
 */
    public function wpListComments(string|array $args = [], array $comments = null): mixed;
}
