<?php

namespace WpService\Contracts;

interface ParentDropdown
{
    /**
     * Prints out option HTML elements for the page parents drop-down.
     *
     * @since 1.5.0
     * @since 4.4.0 `$post` argument was added.
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $defaultPage Optional. The default page ID to be pre-selected. Default 0.
     * @param int $parentPage  Optional. The parent page ID. Default 0.
     * @param int $level        Optional. Page depth level. Default 0.
     * @param int|\WP_Post $post         Post ID or WP_Post object.
     * @return void|false Void on success, false if the page has no children.
     */
    public function parentDropdown(int $defaultPage = 0, int $parentPage = 0, int $level = 0, int|\WP_Post $post = null): mixed;
}
