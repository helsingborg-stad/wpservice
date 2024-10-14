<?php

namespace WpService\Contracts;

interface WpPrivacyAnonymizeIp
{
/**
 * Returns an anonymized IPv4 or IPv6 address.
 *
 * @since 4.9.6 Abstracted from `WP_Community_Events::get_unsafe_client_ip()`.
 *
 * @param string $ipAddr       The IPv4 or IPv6 address to be anonymized.
 * @param bool $ipv6Fallback Optional. Whether to return the original IPv6 address if the needed functions
 *                              to anonymize it are not present. Default false, return `::` (unspecified address).
 * @return string  The anonymized IP address.
 */
    public function wpPrivacyAnonymizeIp(string $ipAddr, bool $ipv6Fallback = false): string;
}
