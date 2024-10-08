<?php

namespace WpService\Contracts;

interface WpLocalizeCommunityEvents
{
    /**
     * Localizes community events data that needs to be passed to dashboard.js.
     *
     * @since 4.8.0
     */
    public function wpLocalizeCommunityEvents(): void;
}
