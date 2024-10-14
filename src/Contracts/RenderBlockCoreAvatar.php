<?php

namespace WpService\Contracts;

interface RenderBlockCoreAvatar
{
/**
 * Renders the `core/avatar` block on the server.
 *
 * @since 6.0.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 * @return string Return the avatar.
 */
    public function renderBlockCoreAvatar(array $attributes, string $content, \WP_Block $block): string;
}
