<?php

namespace WpService\Contracts;

interface BlockCoreImageRenderLightbox
{
    /**
 * Adds the directives and layout needed for the lightbox behavior.
 *
 * @since 6.4.0
 *
 * @param string $blockContent Rendered block content.
 * @param array $block         Block object.
 *
 * @return string Filtered block content.
 */
    public function blockCoreImageRenderLightbox(string $blockContent, array $block): string;
}
