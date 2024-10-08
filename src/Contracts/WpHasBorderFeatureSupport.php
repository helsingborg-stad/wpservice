<?php

namespace WpService\Contracts;

interface WpHasBorderFeatureSupport
{
    /**
 * Checks whether the current block type supports the border feature requested.
 *
 * If the `__experimentalBorder` support flag is a boolean `true` all border
 * support features are available. Otherwise, the specific feature's support
 * flag nested under `experimentalBorder` must be enabled for the feature
 * to be opted into.
 *
 * @since 5.8.0
 * @access private
 *
 * @param \WP_Block_Type $blockType    Block type to check for support.
 * @param string $feature       Name of the feature to check support for.
 * @param mixed $defaultValue Fallback value for feature support, defaults to false.
 * @return bool Whether the feature is supported.
 */
    public function wpHasBorderFeatureSupport(\WP_Block_Type $blockType, string $feature, mixed $defaultValue = false): bool;
}
