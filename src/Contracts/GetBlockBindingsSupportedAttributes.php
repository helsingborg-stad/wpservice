<?php

namespace WpService\Contracts;

interface GetBlockBindingsSupportedAttributes
{
/**
 * Retrieves the list of block attributes supported by block bindings.
 *
 * @since 6.9.0
 *
 * @param string $blockType The block type whose supported attributes are being retrieved.
 * @return array The list of block attributes that are supported by block bindings.
 */
    public function getBlockBindingsSupportedAttributes(string $blockType): array;
}
