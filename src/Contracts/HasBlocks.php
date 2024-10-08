<?php

namespace WpService\Contracts;

interface HasBlocks
{
    /**
 * Determines whether a post or content string has blocks.
 *
 * This test optimizes for performance rather than strict accuracy, detecting
 * the pattern of a block but not validating its structure. For strict accuracy,
 * you should use the block parser on post content.
 *
 * @since 5.0.0
 *
 * @see parse_blocks()
 *
 * @param int|string|\WP_Post|null $post Optional. Post content, post ID, or post object.
 *                                      Defaults to global $post.
 * @return bool Whether the post has blocks.
 */
    public function hasBlocks(int|string|\WP_Post|null $post): bool;
}
