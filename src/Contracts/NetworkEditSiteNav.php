<?php

namespace WpService\Contracts;

interface NetworkEditSiteNav
{
    /**
     * Outputs the HTML for a network's "Edit Site" tabular interface.
     *
     * @since 4.6.0
     *
     * @global string $pagenow The filename of the current screen.
     *
     * @param array $args {
     *     Optional. Array or string of Query parameters. Default empty array.
     *
     * @type int    $blog_id  The site ID. Default is the current site.
     * @type array  $links    The tabs to include with (label|url|cap) keys.
     * @type string $selected The ID of the selected link.
     * }
     */
    public function networkEditSiteNav(array $args = []): void;
}
