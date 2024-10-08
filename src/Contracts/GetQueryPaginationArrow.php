<?php

namespace WpService\Contracts;

interface GetQueryPaginationArrow
{
    /**
     * Helper function that returns the proper pagination arrow HTML for
     * `QueryPaginationNext` and `QueryPaginationPrevious` blocks based
     * on the provided `paginationArrow` from `QueryPagination` context.
     *
     * It's used in QueryPaginationNext and QueryPaginationPrevious blocks.
     *
     * @since 5.9.0
     *
     * @param \WP_Block $block   Block instance.
     * @param bool $isNext Flag for handling `next/previous` blocks.
     * @return string|null The pagination arrow HTML or null if there is none.
     */
    public function getQueryPaginationArrow(\WP_Block $block, bool $isNext): string|null;
}
