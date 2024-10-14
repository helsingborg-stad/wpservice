<?php

namespace WpService\Contracts;

interface WpTargetedLinkRel
{
/**
 * Adds `rel="noopener"` to all HTML A elements that have a target.
 *
 * @since 5.1.0
 * @since 5.6.0 Removed 'noreferrer' relationship.
 *
 * @param string $text Content that may contain HTML A elements.
 * @return string Converted content.
 */
    public function wpTargetedLinkRel(string $text): string;
}
