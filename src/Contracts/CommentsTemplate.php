<?php

namespace WpService\Contracts;

interface CommentsTemplate
{
    /**
 * Loads the comment template specified in $file.
 *
 * Will not display the comments template if not on single post or page, or if
 * the post does not have comments.
 *
 * Uses the WordPress database object to query for the comments. The comments
 * are passed through the {@see 'comments_array'} filter hook with the list of comments
 * and the post ID respectively.
 *
 * The `$file` path is passed through a filter hook called {@see 'comments_template'},
 * which includes the template directory and $file combined. Tries the $filtered path
 * first and if it fails it will require the default comment template from the
 * default theme. If either does not exist, then the WordPress process will be
 * halted. It is advised for that reason, that the default theme is not deleted.
 *
 * Will not try to get the comments if the post has none.
 *
 * @since 1.5.0
 *
 * @global WP_Query   $wp_query           WordPress Query object.
 * @global WP_Post    $post               Global post object.
 * @global wpdb       $wpdb               WordPress database abstraction object.
 * @global int        $id
 * @global WP_Comment $comment            Global comment object.
 * @global string     $user_login
 * @global string     $user_identity
 * @global bool       $overridden_cpage
 * @global bool       $withcomments
 * @global string     $wp_stylesheet_path Path to current theme's stylesheet directory.
 * @global string     $wp_template_path   Path to current theme's template directory.
 *
 * @param string $file              Optional. The file to load. Default '/comments.php'.
 * @param bool $separateComments Optional. Whether to separate the comments by comment type.
 *                                  Default false.
 */
    public function commentsTemplate(string $file = '/comments.php', bool $separateComments = false): void;
}
