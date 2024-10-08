<?php

namespace WpService\Contracts;

interface SerializeBlocks
{
    /**
 * Returns a joined string of the aggregate serialization of the given
 * parsed blocks.
 *
 * @since 5.3.1
 *
 * @param array[] $blocks {
 *     Array of block structures.
 *
 *     @type array ...$0 {
 *         A representative array of a single parsed block object. See WP_Block_Parser_Block.
 *
 *         @type string   $blockName    Name of block.
 *         @type array    $attrs        Attributes from block comment delimiters.
 *         @type array[]  $innerBlocks  List of inner blocks. An array of arrays that
 *                                      have the same structure as this one.
 *         @type string   $innerHTML    HTML from inside block comment delimiters.
 *         @type array    $innerContent List of string fragments and null markers where
 *                                      inner blocks were found.
 *     }
 * }
 * @return string String of rendered HTML.
 */
    public function serializeBlocks(array $blocks): string;
}
