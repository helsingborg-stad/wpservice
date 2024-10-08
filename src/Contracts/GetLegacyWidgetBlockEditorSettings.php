<?php

namespace WpService\Contracts;

interface GetLegacyWidgetBlockEditorSettings
{
    /**
 * Returns the block editor settings needed to use the Legacy Widget block which
 * is not registered by default.
 *
 * @since 5.8.0
 *
 * @return array Settings to be used with get_block_editor_settings().
 */
    public function getLegacyWidgetBlockEditorSettings(): array;
}
