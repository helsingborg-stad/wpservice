<?php

namespace WpService\Contracts;

interface ExportWp
{
    /**
 * Generates the WXR export file for download.
 *
 * Default behavior is to export all content, however, note that post content will only
 * be exported for post types with the `can_export` argument enabled. Any posts with the
 * 'auto-draft' status will be skipped.
 *
 * @since 2.1.0
 * @since 5.7.0 Added the `post_modified` and `post_modified_gmt` fields to the export file.
 *
 * @global wpdb    $wpdb WordPress database abstraction object.
 * @global WP_Post $post Global post object.
 *
 * @param array $args {
 *     Optional. Arguments for generating the WXR export file for download. Default empty array.
 *
 *     @type string $content    Type of content to export. If set, only the post content of this post type
 *                              will be exported. Accepts 'all', 'post', 'page', 'attachment', or a defined
 *                              custom post. If an invalid custom post type is supplied, every post type for
 *                              which `can_export` is enabled will be exported instead. If a valid custom post
 *                              type is supplied but `can_export` is disabled, then 'posts' will be exported
 *                              instead. When 'all' is supplied, only post types with `can_export` enabled will
 *                              be exported. Default 'all'.
 *     @type string $author     Author to export content for. Only used when `$content` is 'post', 'page', or
 *                              'attachment'. Accepts false (all) or a specific author ID. Default false (all).
 *     @type string $category   Category (slug) to export content for. Used only when `$content` is 'post'. If
 *                              set, only post content assigned to `$category` will be exported. Accepts false
 *                              or a specific category slug. Default is false (all categories).
 *     @type string $start_date Start date to export content from. Expected date format is 'Y-m-d'. Used only
 *                              when `$content` is 'post', 'page' or 'attachment'. Default false (since the
 *                              beginning of time).
 *     @type string $end_date   End date to export content to. Expected date format is 'Y-m-d'. Used only when
 *                              `$content` is 'post', 'page' or 'attachment'. Default false (latest publish date).
 *     @type string $status     Post status to export posts for. Used only when `$content` is 'post' or 'page'.
 *                              Accepts false (all statuses except 'auto-draft'), or a specific status, i.e.
 *                              'publish', 'pending', 'draft', 'auto-draft', 'future', 'private', 'inherit', or
 *                              'trash'. Default false (all statuses except 'auto-draft').
 * }
 */
    public function exportWp(array $args): void;
}
