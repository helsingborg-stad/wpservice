<?php

namespace WpService\Contracts;

interface PostExists
{
/**
 * Determines if a post exists based on title, content, date and type.
 *
 * @since 2.0.0
 * @since 5.2.0 Added the `$type` parameter.
 * @since 5.8.0 Added the `$status` parameter.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $title   Post title.
 * @param string $content Optional. Post content.
 * @param string $date    Optional. Post date.
 * @param string $type    Optional. Post type.
 * @param string $status  Optional. Post status.
 * @return int Post ID if post exists, 0 otherwise.
 */
    public function postExists(string $title, string $content = '', string $date = '', string $type = '', string $status = ''): int;
}
