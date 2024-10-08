<?php

namespace WpService\Contracts;

interface PrivacyPingFilter
{
    /**
 * Checks whether blog is public before returning sites.
 *
 * @since 2.1.0
 *
 * @param mixed $sites Will return if blog is public, will not return if not public.
 * @return mixed Empty string if blog is not public, returns $sites, if site is public.
 */
    public function privacyPingFilter(mixed $sites): mixed;
}
