<?php

namespace WpService\Contracts;

interface BlockCoreCalendarHasPublishedPosts
{
    /**
 * Returns whether or not there are any published posts.
 *
 * Used to hide the calendar block when there are no published posts.
 * This compensates for a known Core bug: https://core.trac.wordpress.org/ticket/12016
 *
 * @since 5.9.0
 *
 * @return bool Has any published posts or not.
 */
    public function blockCoreCalendarHasPublishedPosts(): bool;
}
