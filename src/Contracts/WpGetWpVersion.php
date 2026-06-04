<?php

namespace WpService\Contracts;

interface WpGetWpVersion
{
/**
 * Returns the current WordPress version.
 *
 * Returns an unmodified value of `$wp_version`. Some plugins modify the global
 * in an attempt to improve security through obscurity. This practice can cause
 * errors in WordPress, so the ability to get an unmodified version is needed.
 *
 * @since 6.7.0
 *
 * @return string The current WordPress version.
 */
    public function wpGetWpVersion(): string;
}
