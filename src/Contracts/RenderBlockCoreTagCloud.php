<?php

namespace WpService\Contracts;

interface RenderBlockCoreTagCloud
{
    /**
 * Renders the `core/tag-cloud` block on server.
 *
 * @since 5.2.0
 *
 * @param array $attributes The block attributes.
 *
 * @return string Returns the tag cloud for selected taxonomy.
 */
    public function renderBlockCoreTagCloud(array $attributes): string;
}
