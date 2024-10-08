<?php

namespace WpService\Contracts;

interface GetBlockCorePostFeaturedImageBorderAttributes
{
    /**
     * Generates class names and styles to apply the border support styles for
     * the Post Featured Image block.
     *
     * @since 6.1.0
     *
     * @param array $attributes The block attributes.
     * @return array The border-related classnames and styles for the block.
     */
    public function getBlockCorePostFeaturedImageBorderAttributes(array $attributes): array;
}
