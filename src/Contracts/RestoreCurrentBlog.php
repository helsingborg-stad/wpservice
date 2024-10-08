<?php

namespace WpService\Contracts;

interface RestoreCurrentBlog
{
    /**
     * Restores the current blog, after calling switch_to_blog().
     *
     * @see switch_to_blog()
     * @since MU (3.0.0)
     *
     * @global wpdb            $wpdb               WordPress database abstraction object.
     * @global array           $_wp_switched_stack
     * @global int             $blog_id
     * @global bool            $switched
     * @global string          $table_prefix       The database table prefix.
     * @global WP_Object_Cache $wp_object_cache
     *
     * @return bool True on success, false if we're already on the current blog.
     */
    public function restoreCurrentBlog(): bool;
}
