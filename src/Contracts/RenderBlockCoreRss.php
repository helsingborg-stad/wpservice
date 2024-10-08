<?php

namespace WpService\Contracts;

interface RenderBlockCoreRss
{
    /**
 * Renders the `core/rss` block on server.
 *
 * @since 5.2.0
 *
 * @param array $attributes The block attributes.
 *
 * @return string Returns the block content with received rss items.
 */
    public function renderBlockCoreRss(array $attributes): string;
}
