<?php

namespace WpService\Contracts;

interface EnqueueLegacyPostCommentsBlockStyles
{
    /**
     * Enqueues styles from the legacy `core/post-comments` block. These styles are
     * required only by the block's fallback.
     *
     * @since 6.1.0
     *
     * @param string $blockName Name of the new block type.
     */
    public function enqueueLegacyPostCommentsBlockStyles(string $blockName): void;
}
