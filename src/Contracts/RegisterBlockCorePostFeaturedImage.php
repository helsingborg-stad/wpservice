<?php

namespace WpService\Contracts;

interface RegisterBlockCorePostFeaturedImage
{
    /**
     * Registers the `core/post-featured-image` block on the server.
     *
     * @since 5.8.0
     */
    public function registerBlockCorePostFeaturedImage(): void;
}
