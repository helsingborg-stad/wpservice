<?php

namespace WpService\Contracts;

interface RenderBlockCoreQueryPagination
{
/**
 * Renders the `core/query-pagination` block on the server.
 *
 * @since 5.9.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 *
 * @return string Returns the wrapper for the Query pagination.
 */
    public function renderBlockCoreQueryPagination(array $attributes, string $content): string;
}
