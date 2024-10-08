<?php

namespace WpService\Contracts;

interface RenderBlockCoreQueryPaginationPrevious
{
    /**
     * Renders the `core/query-pagination-previous` block on the server.
     *
     * @since 5.8.0
     *
     * @param array $attributes Block attributes.
     * @param string $content    Block default content.
     * @param \WP_Block $block      Block instance.
     *
     * @return string Returns the previous posts link for the query.
     */
    public function renderBlockCoreQueryPaginationPrevious(array $attributes, string $content, \WP_Block $block): string;
}
