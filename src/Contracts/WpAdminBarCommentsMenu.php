<?php

namespace WpService\Contracts;

interface WpAdminBarCommentsMenu
{
    /**
 * Adds edit comments link with awaiting moderation count bubble.
 *
 * @since 3.1.0
 *
 * @param \WP_Admin_Bar $wpAdminBar The WP_Admin_Bar instance.
 */
    public function wpAdminBarCommentsMenu(\WP_Admin_Bar $wpAdminBar): void;
}
