<?php

namespace WpService\Contracts;

interface AdminColorSchemePicker
{
    /**
 * Displays the default admin color scheme picker (Used in user-edit.php).
 *
 * @since 3.0.0
 *
 * @global array $_wp_admin_css_colors
 *
 * @param int $userId User ID.
 */
    public function adminColorSchemePicker(int $userId): void;
}
