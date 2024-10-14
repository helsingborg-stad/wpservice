<?php

namespace WpService\Contracts;

interface HasBlock
{
/**
 * Determines whether a $post or a string contains a specific block type.
 *
 * This test optimizes for performance rather than strict accuracy, detecting
 * whether the block type exists but not validating its structure and not checking
 * synced patterns (formerly called reusable blocks). For strict accuracy,
 * you should use the block parser on post content.
 *
 * @since 5.0.0
 *
 * @see parse_blocks()
 *
 * @param string $blockName Full block type to look for.
 * @param int|string|\WP_Post|null $post       Optional. Post content, post ID, or post object.
 *                                            Defaults to global $post.
 * @return bool Whether the post content contains the specified block.
 */
    public function hasBlock(string $blockName, int|string|\WP_Post|null $post = null): bool;
}
