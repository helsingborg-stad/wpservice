<?php

namespace WpService\Contracts;

interface WpRenderBlockStyleVariationSupportStyles
{
    /**
 * Render the block style variation's styles.
 *
 * In the case of nested blocks with variations applied, we want the parent
 * variation's styles to be rendered before their descendants. This solves the
 * issue of a block type being styled in both the parent and descendant: we want
 * the descendant style to take priority, and this is done by loading it after,
 * in the DOM order. This is why the variation stylesheet generation is in a
 * different filter.
 *
 * @since 6.6.0
 * @access private
 *
 * @param array $parsedBlock The parsed block.
 *
 * @return array The parsed block with block style variation classname added.
 */
    public function wpRenderBlockStyleVariationSupportStyles(array $parsedBlock): array;
}
