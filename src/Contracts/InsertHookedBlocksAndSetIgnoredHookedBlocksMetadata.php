<?php

namespace WpService\Contracts;

interface InsertHookedBlocksAndSetIgnoredHookedBlocksMetadata
{
    /**
 * Returns the markup for blocks hooked to the given anchor block in a specific relative position and then
 * adds a list of hooked block types to an anchor block's ignored hooked block types.
 *
 * This function is meant for internal use only.
 *
 * @since 6.6.0
 * @access private
 *
 * @param array $parsedAnchorBlock The anchor block, in parsed block array format.
 * @param string $relativePosition   The relative position of the hooked blocks.
 *                                                             Can be one of 'before', 'after', 'first_child', or 'last_child'.
 * @param array $hookedBlocks       An array of hooked block types, grouped by anchor block and relative position.
 * @param \WP_Block_Template|\WP_Post|array $context             The block template, template part, or pattern that the anchor block belongs to.
 * @return string
 */
    public function insertHookedBlocksAndSetIgnoredHookedBlocksMetadata(array $parsedAnchorBlock, string $relativePosition, array $hookedBlocks, \WP_Block_Template|\WP_Post|array $context): string;
}
