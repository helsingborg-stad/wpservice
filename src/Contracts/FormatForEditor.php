<?php

namespace WpService\Contracts;

interface FormatForEditor
{
    /**
     * Formats text for the editor.
     *
     * Generally the browsers treat everything inside a textarea as text, but
     * it is still a good idea to HTML entity encode `<`, `>` and `&` in the content.
     *
     * The filter {@see 'format_for_editor'} is applied here. If `$text` is empty the
     * filter will be applied to an empty string.
     *
     * @since 4.3.0
     *
     * @see _WP_Editors::editor()
     *
     * @param string $text           The text to be formatted.
     * @param string $defaultEditor The default editor for the current user.
     *                               It is usually either 'html' or 'tinymce'.
     * @return string The formatted text after filter is applied.
     */
    public function formatForEditor(string $text, string $defaultEditor = null): string;
}
