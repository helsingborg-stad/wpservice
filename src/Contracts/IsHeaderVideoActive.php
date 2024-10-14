<?php

namespace WpService\Contracts;

interface IsHeaderVideoActive
{
/**
 * Checks whether the custom header video is eligible to show on the current page.
 *
 * @since 4.7.0
 *
 * @return bool True if the custom header video should be shown. False if not.
 */
    public function isHeaderVideoActive(): bool;
}
