<?php

namespace WpService\Contracts;

interface DoAllPings
{
    /**
     * Performs all pingbacks, enclosures, trackbacks, and sends to pingback services.
     *
     * @since 2.1.0
     * @since 5.6.0 Introduced `do_all_pings` action hook for individual services.
     */
    public function doAllPings(): void;
}
