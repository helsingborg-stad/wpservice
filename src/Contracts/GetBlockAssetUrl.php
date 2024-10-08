<?php

namespace WpService\Contracts;

interface GetBlockAssetUrl
{
    /**
 * Gets the URL to a block asset.
 *
 * @since 6.4.0
 *
 * @param string $path A normalized path to a block asset.
 * @return string|false The URL to the block asset or false on failure.
 */
    public function getBlockAssetUrl(string $path): string|false;
}
