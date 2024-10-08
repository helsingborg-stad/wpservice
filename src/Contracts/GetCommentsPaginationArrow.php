<?php

namespace WpService\Contracts;

interface GetCommentsPaginationArrow
{
    /**
 * Helper function that returns the proper pagination arrow HTML for
 * `CommentsPaginationNext` and `CommentsPaginationPrevious` blocks based on the
 * provided `paginationArrow` from `CommentsPagination` context.
 *
 * It's used in CommentsPaginationNext and CommentsPaginationPrevious blocks.
 *
 * @since 6.0.0
 *
 * @param \WP_Block $block           Block instance.
 * @param string $paginationType Optional. Type of the arrow we will be rendering.
 *                                  Accepts 'next' or 'previous'. Default 'next'.
 * @return string|null The pagination arrow HTML or null if there is none.
 */
    public function getCommentsPaginationArrow(\WP_Block $block, string $paginationType = 'next'): string|null;
}
