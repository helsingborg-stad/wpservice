<?php

namespace WpService\Contracts;

interface WpUpdatePost
{
    /**
     * Updates a post with new post data.
     *
     * The date does not have to be set for drafts. You can set the date and it will
     * not be overridden.
     *
     * @since 1.0.0
     * @since 3.5.0 Added the `$wp_error` parameter to allow a WP_Error to be returned on failure.
     * @since 5.6.0 Added the `$fire_after_hooks` parameter.
     *
     * @param array|object $postarr          Optional. Post data. Arrays are expected to be escaped,
     *                                       objects are not. See wp_insert_post() for accepted arguments.
     *                                       Default array.
     * @param bool $wpError         Optional. Whether to return a WP_Error on failure. Default false.
     * @param bool $fireAfterHooks Optional. Whether to fire the after insert hooks. Default true.
     * @return int|\WP_Error The post ID on success. The value 0 or WP_Error on failure.
     */
    public function wpUpdatePost(array|object $postarr = [], bool $wpError = false, bool $fireAfterHooks = true): int|\WP_Error;
}
