<?php

namespace WpService\Contracts;

use WP_Error;

interface UpdatePost
{
    /**
     * Updates a existing post with new data.
     *
     * @param int $postId The ID of the post to update.
     * @param array $data The data to update the post with.
     *
     * @return bool Post ID on success or wp_error on failure.
     */
    public function updadatePost(int $postId, array $data): int|WP_Error;
}
