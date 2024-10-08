<?php

namespace WpService\Contracts;

interface RenderBlockCoreCategories
{
    /**
     * Renders the `core/categories` block on server.
     *
     * @since 5.0.0
     *
     * @param array $attributes The block attributes.
     *
     * @return string Returns the categories list/dropdown markup.
     */
    public function renderBlockCoreCategories(array $attributes): string;
}
