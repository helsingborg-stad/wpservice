<?php

namespace WpService\Contracts;

interface WpSiteIcon
{
    /**
 * Displays site icon meta tags.
 *
 * @since 4.3.0
 *
 * @link https://www.whatwg.org/specs/web-apps/current-work/multipage/links.html#rel-icon HTML5 specification link icon.
 */
    public function wpSiteIcon(): void;
}
