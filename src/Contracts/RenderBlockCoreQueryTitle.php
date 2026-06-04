<?php

namespace WpService\Contracts;

interface RenderBlockCoreQueryTitle
{
/**
 * Renders the `core/query-title` block on the server.
 * For now it supports Archive title, Search title, and Post Type Label,
 * using queried object information
 *
 * @since 5.8.0
 *
 * @param array $attributes Block attributes.
 * @param array $content   Block content.
 * @param object $block      Block instance.
 *
 * @return string Returns the query title based on the queried object.
 */
    public function renderBlockCoreQueryTitle(array $attributes, $content, object $block): string;
}
