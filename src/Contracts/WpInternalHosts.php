<?php

namespace WpService\Contracts;

interface WpInternalHosts
{
    /**
 * Returns an array of URL hosts which are considered to be internal hosts.
 *
 * By default the list of internal hosts is comprised of the host name of
 * the site's home_url() (as parsed by wp_parse_url()).
 *
 * This list is used when determining if a specified URL is a link to a page on
 * the site itself or a link offsite (to an external host). This is used, for
 * example, when determining if the "nofollow" attribute should be applied to a
 * link.
 *
 * @see wp_is_internal_link
 *
 * @since 6.2.0
 *
 * @return string[] An array of URL hosts.
 */
    public function wpInternalHosts(): array;
}
