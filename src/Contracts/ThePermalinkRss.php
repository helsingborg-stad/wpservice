<?php

namespace WpService\Contracts;

interface ThePermalinkRss
{
    /**
     * Displays the permalink to the post for use in feeds.
     *
     * @since 2.3.0
     */
    public function thePermalinkRss(): void;
}
