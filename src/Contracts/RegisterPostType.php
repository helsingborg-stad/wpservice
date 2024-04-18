<?php

namespace WpService\Contracts;

interface RegisterPostType
{
    /**
     * Register a custom post type.
     *
     * @param string $postType The post type slug.
     * @param array $args Optional arguments for registering the post type.
     * @return void
     */
    public function registerPostType(string $postType, array $args = []): void;
}
