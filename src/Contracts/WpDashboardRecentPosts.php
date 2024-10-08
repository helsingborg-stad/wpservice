<?php

namespace WpService\Contracts;

interface WpDashboardRecentPosts
{
    /**
 * Generates Publishing Soon and Recently Published sections.
 *
 * @since 3.8.0
 *
 * @param array $args {
 *     An array of query and display arguments.
 *
 *     @type int    $max     Number of posts to display.
 *     @type string $status  Post status.
 *     @type string $order   Designates ascending ('ASC') or descending ('DESC') order.
 *     @type string $title   Section title.
 *     @type string $id      The container id.
 * }
 * @return bool False if no posts were found. True otherwise.
 */
    public function wpDashboardRecentPosts(array $args): bool;
}
