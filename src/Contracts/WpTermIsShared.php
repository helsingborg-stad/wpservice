<?php

namespace WpService\Contracts;

interface WpTermIsShared
{
/**
 * Determines whether a term is shared between multiple taxonomies.
 *
 * Shared taxonomy terms began to be split in 4.3, but failed cron tasks or
 * other delays in upgrade routines may cause shared terms to remain.
 *
 * @since 4.4.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int $termId Term ID.
 * @return bool Returns false if a term is not shared between multiple taxonomies or
 *              if splitting shared taxonomy terms is finished.
 */
    public function wpTermIsShared(int $termId): bool;
}
