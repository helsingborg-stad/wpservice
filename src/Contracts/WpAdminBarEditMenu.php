<?php

namespace WpService\Contracts;

interface WpAdminBarEditMenu
{
    /**
     * Provides an edit link for posts and terms.
     *
     * @since 3.1.0
     * @since 5.5.0 Added a "View Post" link on Comments screen for a single post.
     *
     * @global WP_Term  $tag
     * @global WP_Query $wp_the_query WordPress Query object.
     * @global int      $user_id      The ID of the user being edited. Not to be confused with the
     *                                global $user_ID, which contains the ID of the current user.
     * @global int      $post_id      The ID of the post when editing comments for a single post.
     *
     * @param \WP_Admin_Bar $wpAdminBar The WP_Admin_Bar instance.
     */
    public function wpAdminBarEditMenu(\WP_Admin_Bar $wpAdminBar): void;
}
