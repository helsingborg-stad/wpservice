<?php

namespace WpService\Contracts;

interface WpRenderElementsSupportStyles
{
    /**
 * Render the elements stylesheet and adds elements class name to block as required.
 *
 * In the case of nested blocks we want the parent element styles to be rendered before their descendants.
 * This solves the issue of an element (e.g.: link color) being styled in both the parent and a descendant:
 * we want the descendant style to take priority, and this is done by loading it after, in DOM order.
 *
 * @since 6.0.0
 * @since 6.1.0 Implemented the style engine to generate CSS and classnames.
 * @since 6.6.0 Element block support class and styles are generated via the `render_block_data` filter instead of `pre_render_block`.
 * @access private
 *
 * @param array $parsedBlock The parsed block.
 * @return array The same parsed block with elements classname added if appropriate.
 */
    public function wpRenderElementsSupportStyles(array $parsedBlock): array;
}
