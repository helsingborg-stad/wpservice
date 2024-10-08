<?php

namespace WpService\Contracts;

interface RenderBlockCoreSearch
{
    /**
     * Dynamically renders the `core/search` block.
     *
     * @since 6.3.0 Using block.json `viewScript` to register script, and update `view_script_handles()` only when needed.
     *
     * @param array $attributes The block attributes.
     * @param string $content    The saved content.
     * @param \WP_Block $block      The parsed block.
     *
     * @return string The search block markup.
     */
    public function renderBlockCoreSearch(array $attributes, string $content, \WP_Block $block): string;
}
