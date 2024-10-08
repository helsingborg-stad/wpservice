<?php

namespace WpService\Contracts;

interface RenderBlockCoreTermDescription
{
    /**
     * Renders the `core/term-description` block on the server.
     *
     * @since 5.9.0
     *
     * @param array $attributes Block attributes.
     *
     * @return string Returns the description of the current taxonomy term, if available
     */
    public function renderBlockCoreTermDescription(array $attributes): string;
}
