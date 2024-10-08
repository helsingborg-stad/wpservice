<?php

namespace WpService\Contracts;

interface WpRemoveTargetedLinkRelFilters
{
    /**
 * Removes all filters modifying the rel attribute of targeted links.
 *
 * @since 5.1.0
 */
    public function wpRemoveTargetedLinkRelFilters(): void;
}
