<?php

namespace WpService\Contracts;

interface GetBlockCategories
{
/**
 * Returns all the categories for block types that will be shown in the block editor.
 *
 * @since 5.0.0
 * @since 5.8.0 It is possible to pass the block editor context as param.
 *
 * @param \WP_Post|\WP_Block_Editor_Context $postOrBlockEditorContext The current post object or
 *                                                                      the block editor context.
 *
 * @return array[] Array of categories for block types.
 */
    public function getBlockCategories(\WP_Post|\WP_Block_Editor_Context $postOrBlockEditorContext): array;
}
