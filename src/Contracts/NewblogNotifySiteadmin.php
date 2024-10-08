<?php

namespace WpService\Contracts;

interface NewblogNotifySiteadmin
{
    /**
 * Notifies the network admin that a new site has been activated.
 *
 * Filter {@see 'newblog_notify_siteadmin'} to change the content of
 * the notification email.
 *
 * @since MU (3.0.0)
 * @since 5.1.0 $blog_id now supports input from the {@see 'wp_initialize_site'} action.
 *
 * @param \WP_Site|int $blogId    The new site's object or ID.
 * @param string $deprecated Not used.
 * @return bool
 */
    public function newblogNotifySiteadmin(\WP_Site|int $blogId, string $deprecated): bool;
}
