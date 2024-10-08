<?php

namespace WpService\Contracts;

interface BlockCoreSocialLinkGetColorClasses
{
    /**
 * Returns CSS classes for icon and icon background colors.
 *
 * @since 6.3.0
 *
 * @param array $context Block context passed to Social Sharing Link.
 *
 * @return string CSS classes for link's icon and background colors.
 */
    public function blockCoreSocialLinkGetColorClasses(array $context): string;
}
