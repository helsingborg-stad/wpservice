<?php

namespace WpService\Contracts;

interface GetAllowedBlockTypes
{
    /**
     * Gets the list of allowed block types to use in the block editor.
     *
     * @since 5.8.0
     *
     * @param \WP_Block_Editor_Context $blockEditorContext The current block editor context.
     *
     * @return bool|string[] Array of block type slugs, or boolean to enable/disable all.
     */
    public function getAllowedBlockTypes(\WP_Block_Editor_Context $blockEditorContext): bool|array;
}
