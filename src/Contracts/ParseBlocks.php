<?php

namespace WpService\Contracts;

interface ParseBlocks
{
/**
 * Parses blocks out of a content string.
 *
 * Given an HTML document, this function fully-parses block content, producing
 * a tree of blocks and their contents, as well as top-level non-block content,
 * which will appear as a block with no `blockName`.
 *
 * This function can be memory heavy for certain documents, particularly those
 * with deeply-nested blocks or blocks with extensive attribute values. Further,
 * this function must parse an entire document in one atomic operation.
 *
 * If the entire parsed document is not necessary, consider using {@see WP_Block_Processor}
 * instead, as it provides a streaming and low-overhead interface for finding blocks.
 *
 * @since 5.0.0
 *
 * @param string $content Post content.
 * @return array[] {
 *     Array of block structures.
 *
 * @type array ...$0 {
 *         An associative array of a single parsed block object. See WP_Block_Parser_Block.
 *
 * @type string|null $blockName    Name of block.
 * @type array       $attrs        Attributes from block comment delimiters.
 * @type array[]     $innerBlocks  List of inner blocks. An array of arrays that
 *                                         have the same structure as this one.
 * @type string      $innerHTML    HTML from inside block comment delimiters.
 * @type array       $innerContent List of string fragments and null markers where
 *                                         inner blocks were found.
 *     }
 * }
 */
    public function parseBlocks(string $content): array;
}
