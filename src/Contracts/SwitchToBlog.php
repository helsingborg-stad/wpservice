<?php

namespace WpService\Contracts;

interface SwitchToBlog
{
    /**
     * Switches the current blog.
     *
     * This function is useful if you need to pull posts, or other information,
     * from other blogs. You can switch back afterwards using restore_current_blog().
     *
     * PHP code loaded with the originally requested site, such as code from a plugin or theme, does not switch. See #14941.
     *
     * @see restore_current_blog()
     * @since MU (3.0.0)
     *
     * @global wpdb            $wpdb               WordPress database abstraction object.
     * @global int             $blog_id
     * @global array           $_wp_switched_stack
     * @global bool            $switched
     * @global string          $table_prefix       The database table prefix.
     * @global WP_Object_Cache $wp_object_cache
     *
     * @param int $newBlogId The ID of the blog to switch to. Default: current blog.
     * @param bool $deprecated  Not used.
     * @return true Always returns true.
     */
    public function switchToBlog(int $newBlogId, bool $deprecated = null): true;
}
