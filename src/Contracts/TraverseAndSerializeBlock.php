<?php

namespace WpService\Contracts;

interface TraverseAndSerializeBlock
{
    /**
 * Traverses a parsed block tree and applies callbacks before and after serializing it.
 *
 * Recursively traverses the block and its inner blocks and applies the two callbacks provided as
 * arguments, the first one before serializing the block, and the second one after serializing it.
 * If either callback returns a string value, it will be prepended and appended to the serialized
 * block markup, respectively.
 *
 * The callbacks will receive a reference to the current block as their first argument, so that they
 * can also modify it, and the current block's parent block as second argument. Finally, the
 * `$pre_callback` receives the previous block, whereas the `$post_callback` receives
 * the next block as third argument.
 *
 * Serialized blocks are returned including comment delimiters, and with all attributes serialized.
 *
 * This function should be used when there is a need to modify the saved block, or to inject markup
 * into the return value. Prefer `serialize_block` when preparing a block to be saved to post content.
 *
 * This function is meant for internal use only.
 *
 * @since 6.4.0
 * @access private
 *
 * @see serialize_block()
 *
 * @param array $block         A representative array of a single parsed block object. See WP_Block_Parser_Block.
 * @param callable $preCallback  Callback to run on each block in the tree before it is traversed and serialized.
 *                                It is called with the following arguments: &$block, $parent_block, $previous_block.
 *                                Its string return value will be prepended to the serialized block markup.
 * @param callable $postCallback Callback to run on each block in the tree after it is traversed and serialized.
 *                                It is called with the following arguments: &$block, $parent_block, $next_block.
 *                                Its string return value will be appended to the serialized block markup.
 * @return string Serialized block markup.
 */
    public function traverseAndSerializeBlock(array $block, callable $preCallback, callable $postCallback): string;
}
