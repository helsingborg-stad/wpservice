<?php

namespace WpService\Contracts;

interface WpScheduleUpdateNetworkCounts
{
    /**
     * Schedules update of the network-wide counts for the current network.
     *
     * @since 3.1.0
     */
    public function wpScheduleUpdateNetworkCounts(): void;
}
