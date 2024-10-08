<?php

namespace WpService\Contracts;

interface EditPost
{
    /**
     * Updates an existing post with values provided in `$_POST`.
     *
     * If post data is passed as an argument, it is treated as an array of data
     * keyed appropriately for turning into a post object.
     *
     * If post data is not passed, the `$_POST` global variable is used instead.
     *
     * @since 1.5.0
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param array|null $postData Optional. The array of post data to process.
     *                              Defaults to the `$_POST` superglobal.
     * @return int Post ID.
     */
    public function editPost(array|null $postData = null): int;
}
