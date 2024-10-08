<?php

namespace WpService\Contracts;

interface InsertHookedBlocks
{
    /**
 * Returns the markup for blocks hooked to the given anchor block in a specific relative position.
 *
 * @since 6.5.0
 * @access private
 *
 * @param array $parsedAnchorBlock The anchor block, in parsed block array format.
 * @param string $relativePosition   The relative position of the hooked blocks.
 *                                                             Can be one of 'before', 'after', 'first_child', or 'last_child'.
 * @param array $hookedBlocks       An array of hooked block types, grouped by anchor block and relative position.
 * @param \WP_Block_Template|\WP_Post|array $context             The block template, template part, or pattern that the anchor block belongs to.
 * @return string
 */
    public function insertHookedBlocks(array $parsedAnchorBlock, string $relativePosition, array $hookedBlocks, \WP_Block_Template|\WP_Post|array $context): string;
}
