<?php

namespace WpService\Contracts;

interface GetPostStates
{
    /**
     * Retrieves an array of post states from a post.
     *
     * @since 5.3.0
     *
     * @param \WP_Post $post The post to retrieve states for.
     * @return string[] Array of post state labels keyed by their state.
     */
    public function getPostStates(\WP_Post $post): array;
}
