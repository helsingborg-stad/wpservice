<?php

namespace WpService\Contracts;

interface GenerateBlockAssetHandle
{
    /**
 * Generates the name for an asset based on the name of the block
 * and the field name provided.
 *
 * @since 5.5.0
 * @since 6.1.0 Added `$index` parameter.
 * @since 6.5.0 Added support for `viewScriptModule` field.
 *
 * @param string $blockName Name of the block.
 * @param string $fieldName Name of the metadata field.
 * @param int $index      Optional. Index of the asset when multiple items passed.
 *                           Default 0.
 * @return string Generated asset name for the block's field.
 */
    public function generateBlockAssetHandle(string $blockName, string $fieldName, int $index): string;
}
