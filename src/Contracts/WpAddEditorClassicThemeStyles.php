<?php

namespace WpService\Contracts;

interface WpAddEditorClassicThemeStyles
{
    /**
 * Loads classic theme styles on classic themes in the editor.
 *
 * This is needed for backwards compatibility for button blocks specifically.
 *
 * @since 6.1.0
 *
 * @param array $editorSettings The array of editor settings.
 * @return array A filtered array of editor settings.
 */
    public function wpAddEditorClassicThemeStyles(array $editorSettings): array;
}
