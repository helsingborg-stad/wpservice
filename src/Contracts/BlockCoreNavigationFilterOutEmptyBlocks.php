<?php

namespace WpService\Contracts;

interface BlockCoreNavigationFilterOutEmptyBlocks
{
/**
 * Filter out empty "null" blocks from the block list.
 * 'parse_blocks' includes a null block with '\n\n' as the content when
 * it encounters whitespace. This is not a bug but rather how the parser
 * is designed.
 *
 * @since 5.9.0
 *
 * @param array $parsedBlocks the parsed blocks to be normalized.
 * @return array the normalized parsed blocks.
 */
    public function blockCoreNavigationFilterOutEmptyBlocks(array $parsedBlocks): array;
}
