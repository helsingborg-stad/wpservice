<?php

namespace WpService\Contracts;

interface RenderBlockCoreCommentsTitle
{
/**
 * Renders the `core/comments-title` block on the server.
 *
 * @since 6.0.0
 *
 * @param array $attributes Block attributes.
 *
 * @return string Return the post comments title.
 */
    public function renderBlockCoreCommentsTitle(array $attributes): string;
}
