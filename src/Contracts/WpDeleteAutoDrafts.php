<?php

namespace WpService\Contracts;

interface WpDeleteAutoDrafts
{
/**
 * Deletes auto-drafts for new posts that are > 7 days old.
 *
 * @since 3.4.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 */
    public function wpDeleteAutoDrafts(): void;
}
