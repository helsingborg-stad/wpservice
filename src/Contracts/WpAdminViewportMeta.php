<?php

namespace WpService\Contracts;

interface WpAdminViewportMeta
{
    /**
 * Displays the viewport meta in the admin.
 *
 * @since 5.5.0
 */
    public function wpAdminViewportMeta(): void;
}
