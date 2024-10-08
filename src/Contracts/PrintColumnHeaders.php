<?php

namespace WpService\Contracts;

interface PrintColumnHeaders
{
    /**
     * Prints column headers for a particular screen.
     *
     * @since 2.7.0
     *
     * @param string|\WP_Screen $screen  The screen hook name or screen object.
     * @param bool $withId Whether to set the ID attribute or not.
     */
    public function printColumnHeaders(string|\WP_Screen $screen, bool $withId = true): void;
}
