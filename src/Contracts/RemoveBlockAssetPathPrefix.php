<?php

namespace WpService\Contracts;

interface RemoveBlockAssetPathPrefix
{
    /**
 * Removes the block asset's path prefix if provided.
 *
 * @since 5.5.0
 *
 * @param string $assetHandleOrPath Asset handle or prefixed path.
 * @return string Path without the prefix or the original value.
 */
    public function removeBlockAssetPathPrefix(string $assetHandleOrPath): string;
}
