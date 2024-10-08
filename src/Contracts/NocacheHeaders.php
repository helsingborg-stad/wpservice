<?php

namespace WpService\Contracts;

interface NocacheHeaders
{
    /**
     * Sets the HTTP headers to prevent caching for the different browsers.
     *
     * Different browsers support different nocache headers, so several
     * headers must be sent so that all of them get the point that no
     * caching should occur.
     *
     * @since 2.0.0
     *
     * @see wp_get_nocache_headers()
     */
    public function nocacheHeaders(): void;
}
