<?php

namespace WpService\Contracts;

interface BlockHasSupport
{
    /**
 * Checks whether the current block type supports the feature requested.
 *
 * @since 5.8.0
 * @since 6.4.0 The `$feature` parameter now supports a string.
 *
 * @param \WP_Block_Type $blockType    Block type to check for support.
 * @param string|array $feature       Feature slug, or path to a specific feature to check support for.
 * @param mixed $defaultValue Optional. Fallback value for feature support. Default false.
 * @return bool Whether the feature is supported.
 */
    public function blockHasSupport(\WP_Block_Type $blockType, string|array $feature, mixed $defaultValue): bool;
}
