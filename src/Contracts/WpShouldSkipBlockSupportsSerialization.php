<?php

namespace WpService\Contracts;

interface WpShouldSkipBlockSupportsSerialization
{
    /**
 * Checks whether serialization of the current block's supported properties
 * should occur.
 *
 * @since 6.0.0
 * @access private
 *
 * @param \WP_Block_Type $blockType  Block type.
 * @param string $featureSet Name of block support feature set..
 * @param string $feature     Optional name of individual feature to check.
 *
 * @return bool Whether to serialize block support styles & classes.
 */
    public function wpShouldSkipBlockSupportsSerialization(\WP_Block_Type $blockType, string $featureSet, string $feature): bool;
}
