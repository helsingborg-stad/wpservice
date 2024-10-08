<?php

namespace WpService\Contracts;

interface RenderBlockCoreArchives
{
    /**
     * Renders the `core/archives` block on server.
     *
     * @since 5.0.0
     *
     * @see WP_Widget_Archives
     *
     * @param array $attributes The block attributes.
     *
     * @return string Returns the post content with archives added.
     */
    public function renderBlockCoreArchives(array $attributes): string;
}
