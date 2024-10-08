<?php

namespace WpService\Contracts;

interface WpInsertPost
{
    /**
     * Inserts or update a post.
     *
     * If the $postarr parameter has 'ID' set to a value, then post will be updated.
     *
     * You can set the post date manually, by setting the values for 'post_date'
     * and 'post_date_gmt' keys. You can close the comments or open the comments by
     * setting the value for 'comment_status' key.
     *
     * @since 1.0.0
     * @since 2.6.0 Added the `$wp_error` parameter to allow a WP_Error to be returned on failure.
     * @since 4.2.0 Support was added for encoding emoji in the post title, content, and excerpt.
     * @since 4.4.0 A 'meta_input' array can now be passed to `$postarr` to add post meta data.
     * @since 5.6.0 Added the `$fire_after_hooks` parameter.
     *
     * @see sanitize_post()
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param array $postarr {
     *     An array of elements that make up a post to update or insert.
     *
     * @type int    $ID                    The post ID. If equal to something other than 0,
     *                                         the post with that ID will be updated. Default 0.
     * @type int    $post_author           The ID of the user who added the post. Default is
     *                                         the current user ID.
     * @type string $post_date             The date of the post. Default is the current time.
     * @type string $post_date_gmt         The date of the post in the GMT timezone. Default is
     *                                         the value of `$post_date`.
     * @type string $post_content          The post content. Default empty.
     * @type string $post_content_filtered The filtered post content. Default empty.
     * @type string $post_title            The post title. Default empty.
     * @type string $post_excerpt          The post excerpt. Default empty.
     * @type string $post_status           The post status. Default 'draft'.
     * @type string $post_type             The post type. Default 'post'.
     * @type string $comment_status        Whether the post can accept comments. Accepts 'open' or 'closed'.
     *                                         Default is the value of 'default_comment_status' option.
     * @type string $ping_status           Whether the post can accept pings. Accepts 'open' or 'closed'.
     *                                         Default is the value of 'default_ping_status' option.
     * @type string $post_password         The password to access the post. Default empty.
     * @type string $post_name             The post name. Default is the sanitized post title
     *                                         when creating a new post.
     * @type string $to_ping               Space or carriage return-separated list of URLs to ping.
     *                                         Default empty.
     * @type string $pinged                Space or carriage return-separated list of URLs that have
     *                                         been pinged. Default empty.
     * @type int    $post_parent           Set this for the post it belongs to, if any. Default 0.
     * @type int    $menu_order            The order the post should be displayed in. Default 0.
     * @type string $post_mime_type        The mime type of the post. Default empty.
     * @type string $guid                  Global Unique ID for referencing the post. Default empty.
     * @type int    $import_id             The post ID to be used when inserting a new post.
     *                                         If specified, must not match any existing post ID. Default 0.
     * @type int[]  $post_category         Array of category IDs.
     *                                         Defaults to value of the 'default_category' option.
     * @type array  $tags_input            Array of tag names, slugs, or IDs. Default empty.
     * @type array  $tax_input             An array of taxonomy terms keyed by their taxonomy name.
     *                                         If the taxonomy is hierarchical, the term list needs to be
     *                                         either an array of term IDs or a comma-separated string of IDs.
     *                                         If the taxonomy is non-hierarchical, the term list can be an array
     *                                         that contains term names or slugs, or a comma-separated string
     *                                         of names or slugs. This is because, in hierarchical taxonomy,
     *                                         child terms can have the same names with different parent terms,
     *                                         so the only way to connect them is using ID. Default empty.
     * @type array  $meta_input            Array of post meta values keyed by their post meta key. Default empty.
     * @type string $page_template         Page template to use.
     * }
     * @param bool $wpError         Optional. Whether to return a WP_Error on failure. Default false.
     * @param bool $fireAfterHooks Optional. Whether to fire the after insert hooks. Default true.
     * @return int|\WP_Error The post ID on success. The value 0 or WP_Error on failure.
     */
    public function wpInsertPost(array $postarr, bool $wpError = false, bool $fireAfterHooks = true): int|\WP_Error;
}
