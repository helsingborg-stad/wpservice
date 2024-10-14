<?php

namespace WpService\Contracts;

interface SerializeBlock
{
/**
 * Returns the content of a block, including comment delimiters, serializing all
 * attributes from the given parsed block.
 *
 * This should be used when preparing a block to be saved to post content.
 * Prefer `render_block` when preparing a block for display. Unlike
 * `render_block`, this does not evaluate a block's `render_callback`, and will
 * instead preserve the markup as parsed.
 *
 * @since 5.3.1
 *
 * @param array $block {
 *     A representative array of a single parsed block object. See WP_Block_Parser_Block.
 *
 * @type string   $blockName    Name of block.
 * @type array    $attrs        Attributes from block comment delimiters.
 * @type array[]  $innerBlocks  List of inner blocks. An array of arrays that
 *                                  have the same structure as this one.
 * @type string   $innerHTML    HTML from inside block comment delimiters.
 * @type array    $innerContent List of string fragments and null markers where
 *                                  inner blocks were found.
 * }
 * @return string String of rendered HTML.
 */
    public function serializeBlock(array $block): string;
}
