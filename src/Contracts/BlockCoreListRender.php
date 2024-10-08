<?php

namespace WpService\Contracts;

interface BlockCoreListRender
{
    /**
     * Adds the wp-block-list class to the rendered list block.
     * Ensures that pre-existing list blocks use the class name on the front.
     * For example, <ol> is transformed to <ol class="wp-block-list">.
     *
     * @since 6.6.0
     *
     * @see https://github.com/WordPress/gutenberg/issues/12420
     *
     * @param array $attributes Attributes of the block being rendered.
     * @param string $content Content of the block being rendered.
     *
     * @return string The content of the block being rendered.
     */
    public function blockCoreListRender(array $attributes, string $content): string;
}
