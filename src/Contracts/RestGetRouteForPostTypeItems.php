<?php

namespace WpService\Contracts;

interface RestGetRouteForPostTypeItems
{
    /**
     * Gets the REST API route for a post type.
     *
     * @since 5.9.0
     *
     * @param string $postType The name of a registered post type.
     * @return string The route path with a leading slash for the given post type,
     *                or an empty string if there is not a route.
     */
    public function restGetRouteForPostTypeItems(string $postType): string;
}
