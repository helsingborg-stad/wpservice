<?php

namespace WpService\Contracts;

interface RenderBlockCoreComments
{
    /**
 * Renders the `core/comments` block on the server.
 *
 * This render callback is mainly for rendering a dynamic, legacy version of
 * this block (the old `core/post-comments`). It uses the `comments_template()`
 * function to generate the output, in the same way as classic PHP themes.
 *
 * As this callback will always run during SSR, first we need to check whether
 * the block is in legacy mode. If not, the HTML generated in the editor is
 * returned instead.
 *
 * @since 6.1.0
 *
 * @global WP_Post $post Global post object.
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 * @return string Returns the filtered post comments for the current post wrapped inside "p" tags.
 */
    public function renderBlockCoreComments(array $attributes, string $content, \WP_Block $block): string;
}
