<?php

namespace WpService\Contracts;

interface RenderBlockCoreQueryTitle
{
    /**
 * Renders the `core/query-title` block on the server.
 * For now it only supports Archive title,
 * using queried object information
 *
 * @since 5.8.0
 *
 * @param array $attributes Block attributes.
 *
 * @return string Returns the query title based on the queried object.
 */
    public function renderBlockCoreQueryTitle(array $attributes): string;
}
