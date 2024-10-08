<?php

namespace WpService\Contracts;

interface BuildCommentQueryVarsFromBlock
{
    /**
 * Helper function that constructs a comment query vars array from the passed
 * block properties.
 *
 * It's used with the Comment Query Loop inner blocks.
 *
 * @since 6.0.0
 *
 * @param \WP_Block $block Block instance.
 * @return array Returns the comment query parameters to use with the
 *               WP_Comment_Query constructor.
 */
    public function buildCommentQueryVarsFromBlock(\WP_Block $block): array;
}
