<?php

namespace WpService\Contracts;

interface WpCacheSwitchToBlog
{
    /**
     * Switches the internal blog ID.
     *
     * This changes the blog id used to create keys in blog specific groups.
     *
     * @since 3.5.0
     *
     * @see WP_Object_Cache::switch_to_blog()
     * @global WP_Object_Cache $wp_object_cache Object cache global instance.
     *
     * @param int $blogId Site ID.
     */
    public function wpCacheSwitchToBlog(int $blogId): void;
}
