<?php

namespace WpService\Contracts;

interface WpDeleteLink
{
/**
 * Deletes a specified link from the database.
 *
 * @since 2.0.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $linkId ID of the link to delete.
 * @return true Always true.
 */
    public function wpDeleteLink(int $linkId): true;
}
