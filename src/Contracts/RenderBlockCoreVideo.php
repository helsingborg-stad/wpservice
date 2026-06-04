<?php

namespace WpService\Contracts;

interface RenderBlockCoreVideo
{
/**
 * Renders the `core/video` block on the server to supply the width and height attributes from the attachment metadata.
 *
 * @since 6.9.0
 *
 * @phpstan-param  array{ "id"?: positive-int } $attributes
 *
 * @param array $attributes The block attributes.
 * @param string $content    The block content.
 * @return string The block content with the dimensions added.
 */
    public function renderBlockCoreVideo(array $attributes, string $content): string;
}
