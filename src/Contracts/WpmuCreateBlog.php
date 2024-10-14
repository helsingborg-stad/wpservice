<?php

namespace WpService\Contracts;

interface WpmuCreateBlog
{
/**
 * Creates a site.
 *
 * This function runs when a user self-registers a new site as well
 * as when a Super Admin creates a new site. Hook to {@see 'wpmu_new_blog'}
 * for events that should affect all new sites.
 *
 * On subdirectory installations, $domain is the same as the main site's
 * domain, and the path is the subdirectory name (eg 'example.com'
 * and '/blog1/'). On subdomain installations, $domain is the new subdomain +
 * root domain (eg 'blog1.example.com'), and $path is '/'.
 *
 * @since MU (3.0.0)
 *
 * @param string $domain     The new site's domain.
 * @param string $path       The new site's path.
 * @param string $title      The new site's title.
 * @param int $userId    The user ID of the new site's admin.
 * @param array $options    Optional. Array of key=>value pairs used to set initial site options.
 *                           If valid status keys are included ('public', 'archived', 'mature',
 *                           'spam', 'deleted', or 'lang_id') the given site status(es) will be
 *                           updated. Otherwise, keys and values will be used to set options for
 *                           the new site. Default empty array.
 * @param int $networkId Optional. Network ID. Only relevant on multi-network installations.
 *                           Default 1.
 * @return int|\WP_Error Returns WP_Error object on failure, the new site ID on success.
 */
    public function wpmuCreateBlog(string $domain, string $path, string $title, int $userId, array $options = [], int $networkId = 1): int|\WP_Error;
}
