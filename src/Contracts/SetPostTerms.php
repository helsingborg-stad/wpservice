<?php

namespace WpService\Contracts;

use WP_Error;

interface SetPostTerms
{
    /**
     * Set the terms for a post.
     *
     * @param int $postId The ID of the post.
     * @param string|array $terms The terms to set for the post.
     * @param string $taxonomy The taxonomy to which the terms belong.
     * @param bool $append Whether to append the terms to the existing ones.
     * @return array|false|WP_Error The result of setting the terms.
     */
    public function setPostTerms(
        int $postId,
        string|array $terms = "",
        string $taxonomy = "post_tag",
        bool $append = false
    ): array|false|WP_Error;
}
