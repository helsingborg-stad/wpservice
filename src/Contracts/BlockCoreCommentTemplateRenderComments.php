<?php

namespace WpService\Contracts;

interface BlockCoreCommentTemplateRenderComments
{
    /**
     * Function that recursively renders a list of nested comments.
     *
     * @since 6.3.0 Changed render_block_context priority to `1`.
     *
     * @global int $comment_depth
     *
     * @param WP_Comment[] $comments        The array of comments.
     * @param \WP_Block $block           Block instance.
     * @return string
     */
    public function blockCoreCommentTemplateRenderComments(array $comments, \WP_Block $block): string;
}
