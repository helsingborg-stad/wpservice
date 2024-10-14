<?php

namespace WpService\Contracts;

interface WpRenderTypographySupport
{
/**
 * Renders typography styles/content to the block wrapper.
 *
 * @since 6.1.0
 *
 * @param string $blockContent Rendered block content.
 * @param array $block         Block object.
 * @return string Filtered block content.
 */
    public function wpRenderTypographySupport(string $blockContent, array $block): string;
}
