<?php

namespace WpService\Contracts;

interface RemoveEditorStyles
{
    /**
 * Removes all visual editor stylesheets.
 *
 * @since 3.1.0
 *
 * @global array $editor_styles
 *
 * @return bool True on success, false if there were no stylesheets to remove.
 */
    public function removeEditorStyles(): bool;
}
