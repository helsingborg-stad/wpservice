<?php

namespace WpService\Contracts;

interface GetTrackbackUrl
{
    /**
     * Retrieves the current post's trackback URL.
     *
     * There is a check to see if permalink's have been enabled and if so, will
     * retrieve the pretty path. If permalinks weren't enabled, the ID of the
     * current post is used and appended to the correct page to go to.
     *
     * @since 1.5.0
     *
     * @return string The trackback URL after being filtered.
     */
    public function getTrackbackUrl(): string;
}
