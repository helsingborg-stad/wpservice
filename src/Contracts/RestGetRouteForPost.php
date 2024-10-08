<?php

namespace WpService\Contracts;

interface RestGetRouteForPost
{
    /**
     * Gets the REST API route for a post.
     *
     * @since 5.5.0
     *
     * @param int|\WP_Post $post Post ID or post object.
     * @return string The route path with a leading slash for the given post,
     *                or an empty string if there is not a route.
     */
    public function restGetRouteForPost(int|\WP_Post $post): string;
}
