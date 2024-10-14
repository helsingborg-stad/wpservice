<?php

namespace WpService\Contracts;

interface WpUpdateLink
{
/**
 * Updates a link in the database.
 *
 * @since 2.0.0
 *
 * @param array $linkdata Link data to update. See wp_insert_link() for accepted arguments.
 * @return int|\WP_Error Value 0 or WP_Error on failure. The updated link ID on success.
 */
    public function wpUpdateLink(array $linkdata): int|\WP_Error;
}
