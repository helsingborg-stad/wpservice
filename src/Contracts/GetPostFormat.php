<?php

namespace WpService\Contracts;

interface GetPostFormat
{
    /**
     * Retrieve the format slug for a post
     *
     * @since 3.1.0
     *
     * @param int|\WP_Post|null $post Optional. Post ID or post object. Defaults to the current post in the loop.
     * @return string|false The format if successful. False otherwise.
     */
    public function getPostFormat(int|\WP_Post|null $post = null): string|false;
}
