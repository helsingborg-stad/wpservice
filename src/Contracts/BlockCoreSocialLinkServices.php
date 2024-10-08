<?php

namespace WpService\Contracts;

interface BlockCoreSocialLinkServices
{
    /**
 * Returns the SVG for social link.
 *
 * @since 5.4.0
 *
 * @param string $service The service slug to extract data from.
 * @param string $field The field ('name', 'icon', etc) to extract for a service.
 *
 * @return array|string
 */
    public function blockCoreSocialLinkServices(string $service, string $field): array|string;
}
