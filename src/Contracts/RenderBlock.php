<?php

namespace WpService\Contracts;

interface RenderBlock
{
/**
 * Renders a single block into a HTML string.
 *
 * @since 5.0.0
 *
 * @global WP_Post $post The post to edit.
 *
 * @param array $parsedBlock {
 *     An associative array of the block being rendered. See WP_Block_Parser_Block.
 *
 * @type string|null $blockName    Name of block.
 * @type array       $attrs        Attributes from block comment delimiters.
 * @type array[]     $innerBlocks  List of inner blocks. An array of arrays that
 *                                     have the same structure as this one.
 * @type string      $innerHTML    HTML from inside block comment delimiters.
 * @type array       $innerContent List of string fragments and null markers where
 *                                     inner blocks were found.
 * }
 * @return string String of rendered HTML.
 */
    public function renderBlock(array $parsedBlock): string;
}
