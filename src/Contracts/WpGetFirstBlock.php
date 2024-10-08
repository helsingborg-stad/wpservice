<?php

namespace WpService\Contracts;

interface WpGetFirstBlock
{
    /**
 * Finds the first occurrence of a specific block in an array of blocks.
 *
 * @since 6.3.0
 *
 * @param array $blocks     Array of blocks.
 * @param string $blockName Name of the block to find.
 * @return array Found block, or empty array if none found.
 */
    public function wpGetFirstBlock(array $blocks, string $blockName): array;
}
