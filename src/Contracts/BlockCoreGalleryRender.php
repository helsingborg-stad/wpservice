<?php

namespace WpService\Contracts;

interface BlockCoreGalleryRender
{
    /**
 * Renders the `core/gallery` block on the server.
 *
 * @since 6.0.0
 *
 * @param array $attributes Attributes of the block being rendered.
 * @param string $content Content of the block being rendered.
 * @return string The content of the block being rendered.
 */
    public function blockCoreGalleryRender(array $attributes, string $content): string;
}
