<?php

namespace WpService\Contracts;

interface GetSiteTransient
{
    /**
 * Retrieves the value of a site transient.
 *
 * If the transient does not exist, does not have a value, or has expired,
 * then the return value will be false.
 *
 * @since 2.9.0
 *
 * @see get_transient()
 *
 * @param string $transient Transient name. Expected to not be SQL-escaped.
 * @return mixed Value of transient.
 */
    public function getSiteTransient(string $transient): mixed;
}
