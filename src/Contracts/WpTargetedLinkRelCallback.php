<?php

namespace WpService\Contracts;

interface WpTargetedLinkRelCallback
{
    /**
     * Callback to add `rel="noopener"` string to HTML A element.
     *
     * Will not duplicate an existing 'noopener' value to avoid invalidating the HTML.
     *
     * @since 5.1.0
     * @since 5.6.0 Removed 'noreferrer' relationship.
     *
     * @param array $matches Single match.
     * @return string HTML A Element with `rel="noopener"` in addition to any existing values.
     */
    public function wpTargetedLinkRelCallback(array $matches): string;
}
