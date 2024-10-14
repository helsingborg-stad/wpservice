<?php

namespace WpService\Contracts;

interface WpScheduledDelete
{
/**
 * Permanently deletes comments or posts of any type that have held a status
 * of 'trash' for the number of days defined in EMPTY_TRASH_DAYS.
 *
 * The default value of `EMPTY_TRASH_DAYS` is 30 (days).
 *
 * @since 2.9.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 */
    public function wpScheduledDelete(): void;
}
