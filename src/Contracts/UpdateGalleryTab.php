<?php

namespace WpService\Contracts;

interface UpdateGalleryTab
{
    /**
 * Adds the gallery tab back to the tabs array if post has image attachments.
 *
 * @since 2.5.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array $tabs
 * @return array $tabs with gallery if post has image attachment
 */
    public function updateGalleryTab(array $tabs): array;
}
