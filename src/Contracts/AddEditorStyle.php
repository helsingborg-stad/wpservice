<?php

namespace WpService\Contracts;

interface AddEditorStyle
{
    /**
 * Adds callback for custom TinyMCE editor stylesheets.
 *
 * The parameter $stylesheet is the name of the stylesheet, relative to
 * the theme root. It also accepts an array of stylesheets.
 * It is optional and defaults to 'editor-style.css'.
 *
 * This function automatically adds another stylesheet with -rtl prefix, e.g. editor-style-rtl.css.
 * If that file doesn't exist, it is removed before adding the stylesheet(s) to TinyMCE.
 * If an array of stylesheets is passed to add_editor_style(),
 * RTL is only added for the first stylesheet.
 *
 * Since version 3.4 the TinyMCE body has .rtl CSS class.
 * It is a better option to use that class and add any RTL styles to the main stylesheet.
 *
 * @since 3.0.0
 *
 * @global array $editor_styles
 *
 * @param array|string $stylesheet Optional. Stylesheet name or array thereof, relative to theme root.
 *                                 Defaults to 'editor-style.css'
 */
    public function addEditorStyle(array|string $stylesheet): void;
}
