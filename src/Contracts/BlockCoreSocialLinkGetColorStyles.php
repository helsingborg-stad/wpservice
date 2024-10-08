<?php

namespace WpService\Contracts;

interface BlockCoreSocialLinkGetColorStyles
{
    /**
 * Returns CSS styles for icon and icon background colors.
 *
 * @since 5.7.0
 *
 * @param array $context Block context passed to Social Link.
 *
 * @return string Inline CSS styles for link's icon and background colors.
 */
    public function blockCoreSocialLinkGetColorStyles(array $context): string;
}
