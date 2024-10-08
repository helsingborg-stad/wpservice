<?php

namespace WpService\Contracts;

interface WpShortlinkWpHead
{
    /**
     * Injects rel=shortlink into the head if a shortlink is defined for the current page.
     *
     * Attached to the {@see 'wp_head'} action.
     *
     * @since 3.0.0
     */
    public function wpShortlinkWpHead(): void;
}
