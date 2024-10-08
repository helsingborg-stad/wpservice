<?php

namespace WpService\Contracts;

interface RenderBlockCorePostNavigationLink
{
    /**
     * Renders the `core/post-navigation-link` block on the server.
     *
     * @since 5.9.0
     *
     * @param array $attributes Block attributes.
     * @param string $content    Block default content.
     *
     * @return string Returns the next or previous post link that is adjacent to the current post.
     */
    public function renderBlockCorePostNavigationLink(array $attributes, string $content): string;
}
