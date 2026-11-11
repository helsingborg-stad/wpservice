<?php

namespace WpService\Contracts;

interface RenderBlockCoreTermTemplate
{
/**
 * Renders the `core/term-template` block on the server.
 *
 * @since 6.9.0
 *
 * @param array $attributes Block attributes.
 * @param string $content    Block default content.
 * @param \WP_Block $block      Block instance.
 *
 * @return string Returns the output of the term template.
 */
    public function renderBlockCoreTermTemplate(array $attributes, string $content, \WP_Block $block): string;
}
