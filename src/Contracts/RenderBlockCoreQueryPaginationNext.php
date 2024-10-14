<?php

namespace WpService\Contracts;

interface RenderBlockCoreQueryPaginationNext
{
/**
 * Renders the `core/query-pagination-next` block on the server.
 *
 * @since 5.8.0
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 *
 * @return string Returns the next posts link for the query pagination.
 */
    public function renderBlockCoreQueryPaginationNext(array $attributes, string $content, \WP_Block $block): string;
}
