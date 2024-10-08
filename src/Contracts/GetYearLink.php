<?php

namespace WpService\Contracts;

interface GetYearLink
{
    /**
 * Retrieves the permalink for the year archives.
 *
 * @since 1.5.0
 *
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param int|false $year Integer of year. False for current year.
 * @return string The permalink for the specified year archive.
 */
    public function getYearLink(int|false $year): string;
}
