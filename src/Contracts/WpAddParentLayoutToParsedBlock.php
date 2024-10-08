<?php

namespace WpService\Contracts;

interface WpAddParentLayoutToParsedBlock
{
    /**
 * Check if the parent block exists and if it has a layout attribute.
 * If it does, add the parent layout to the parsed block
 *
 * @since 6.6.0
 * @access private
 *
 * @param array $parsedBlock The parsed block.
 * @param array $sourceBlock The source block.
 * @param \WP_Block $parentBlock The parent block.
 * @return array The parsed block with parent layout attribute if it exists.
 */
    public function wpAddParentLayoutToParsedBlock(array $parsedBlock, array $sourceBlock, \WP_Block $parentBlock): array;
}
