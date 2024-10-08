<?php

namespace WpService\Contracts;

interface GetClassicThemeSupportsBlockEditorSettings
{
    /**
     * Returns the classic theme supports settings for block editor.
     *
     * @since 6.2.0
     * @since 6.6.0 Add support for 'editor-spacing-sizes' theme support.
     *
     * @return array The classic theme supports settings.
     */
    public function getClassicThemeSupportsBlockEditorSettings(): array;
}
