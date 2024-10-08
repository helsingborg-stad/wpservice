<?php

namespace WpService\Contracts;

interface GetBlockEditorSettings
{
    /**
 * Returns the contextualized block editor settings for a selected editor context.
 *
 * @since 5.8.0
 *
 * @param array $customSettings      Custom settings to use with the given editor type.
 * @param \WP_Block_Editor_Context $blockEditorContext The current block editor context.
 *
 * @return array The contextualized block editor settings.
 */
    public function getBlockEditorSettings(array $customSettings, \WP_Block_Editor_Context $blockEditorContext): array;
}
