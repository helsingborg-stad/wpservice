<?php

namespace WpService\Contracts;

interface ApplyBlockHooksToContent
{
    /**
 * Runs the hooked blocks algorithm on the given content.
 *
 * @since 6.6.0
 * @access private
 *
 * @param string $content  Serialized content.
 * @param \WP_Block_Template|\WP_Post|array $context  A block template, template part, `wp_navigation` post object,
 *                                                  or pattern that the blocks belong to.
 * @param callable $callback A function that will be called for each block to generate
 *                                                  the markup for a given list of blocks that are hooked to it.
 *                                                  Default: 'insert_hooked_blocks'.
 * @return string The serialized markup.
 */
    public function applyBlockHooksToContent(string $content, \WP_Block_Template|\WP_Post|array $context, callable $callback): string;
}
