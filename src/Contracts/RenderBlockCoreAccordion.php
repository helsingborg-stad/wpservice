<?php

namespace WpService\Contracts;

interface RenderBlockCoreAccordion
{
/**
 * Server-side rendering of the `core/accordion` block.
 *
 * @package WordPress
 * @since 6.9.0
 *
 * @param array $attributes The block attributes.
 * @param string $content The block content.
 *
 * @return string Returns the updated markup.
 */
    public function renderBlockCoreAccordion(array $attributes, string $content): string;
}
