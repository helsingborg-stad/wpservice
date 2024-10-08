<?php

namespace WpService\Contracts;

interface MakeBeforeBlockVisitor
{
    /**
 * Returns a function that injects the theme attribute into, and hooked blocks before, a given block.
 *
 * The returned function can be used as `$pre_callback` argument to `traverse_and_serialize_block(s)`,
 * where it will inject the `theme` attribute into all Template Part blocks, and prepend the markup for
 * any blocks hooked `before` the given block and as its parent's `first_child`, respectively.
 *
 * This function is meant for internal use only.
 *
 * @since 6.4.0
 * @since 6.5.0 Added $callback argument.
 * @access private
 *
 * @param array $hookedBlocks An array of blocks hooked to another given block.
 * @param \WP_Block_Template|\WP_Post|array $context       A block template, template part, `wp_navigation` post object,
 *                                                       or pattern that the blocks belong to.
 * @param callable $callback      A function that will be called for each block to generate
 *                                                       the markup for a given list of blocks that are hooked to it.
 *                                                       Default: 'insert_hooked_blocks'.
 * @return callable A function that returns the serialized markup for the given block,
 *                  including the markup for any hooked blocks before it.
 */
    public function makeBeforeBlockVisitor(array $hookedBlocks, \WP_Block_Template|\WP_Post|array $context, callable $callback = null): callable;
}
