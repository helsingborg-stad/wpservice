<?php

namespace WpService\Contracts;

interface WpShortlinkHeader
{
    /**
 * Sends a Link: rel=shortlink header if a shortlink is defined for the current page.
 *
 * Attached to the {@see 'wp'} action.
 *
 * @since 3.0.0
 */
    public function wpShortlinkHeader(): void;
}
