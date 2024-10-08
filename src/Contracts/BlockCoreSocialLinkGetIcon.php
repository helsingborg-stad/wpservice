<?php

namespace WpService\Contracts;

interface BlockCoreSocialLinkGetIcon
{
    /**
 * Returns the SVG for social link.
 *
 * @since 5.4.0
 *
 * @param string $service The service icon.
 *
 * @return string SVG Element for service icon.
 */
    public function blockCoreSocialLinkGetIcon(string $service): string;
}
