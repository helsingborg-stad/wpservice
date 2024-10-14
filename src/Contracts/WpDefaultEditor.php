<?php

namespace WpService\Contracts;

interface WpDefaultEditor
{
/**
 * Finds out which editor should be displayed by default.
 *
 * Works out which of the editors to display as the current editor for a
 * user. The 'html' setting is for the "Text" editor tab.
 *
 * @since 2.5.0
 *
 * @return string Either 'tinymce', 'html', or 'test'
 */
    public function wpDefaultEditor(): string;
}
