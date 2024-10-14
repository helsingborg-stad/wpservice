<?php

namespace WpService\Contracts;

interface WpInitTargetedLinkRelFilters
{
/**
 * Adds all filters modifying the rel attribute of targeted links.
 *
 * @since 5.1.0
 */
    public function wpInitTargetedLinkRelFilters(): void;
}
