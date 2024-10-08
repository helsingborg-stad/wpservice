<?php

namespace WpService\Contracts;

interface GetBlockCoreAvatarBorderAttributes
{
    /**
 * Generates class names and styles to apply the border support styles for
 * the Avatar block.
 *
 * @since 6.3.0
 *
 * @param array $attributes The block attributes.
 * @return array The border-related classnames and styles for the block.
 */
    public function getBlockCoreAvatarBorderAttributes(array $attributes): array;
}
