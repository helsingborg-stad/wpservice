<?php

namespace WpService\Contracts;

interface RenderBlockCoreLatestComments
{
/**
 * Renders the `core/latest-comments` block on server.
 *
 * @since 5.1.0
 *
 * @param array $attributes The block attributes.
 *
 * @return string Returns the post content with latest comments added.
 */
    public function renderBlockCoreLatestComments(array $attributes = []): string;
}
