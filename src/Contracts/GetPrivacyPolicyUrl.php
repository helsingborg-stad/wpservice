<?php

namespace WpService\Contracts;

interface GetPrivacyPolicyUrl
{
    /**
     * Retrieves the URL to the privacy policy page.
     *
     * @since 4.9.6
     *
     * @return string The URL to the privacy policy page. Empty string if it doesn't exist.
     */
    public function getPrivacyPolicyUrl(): string;
}
