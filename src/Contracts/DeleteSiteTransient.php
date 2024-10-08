<?php

namespace WpService\Contracts;

interface DeleteSiteTransient
{
    /**
     * Deletes a site transient.
     *
     * @since 2.9.0
     *
     * @param string $transient Transient name. Expected to not be SQL-escaped.
     * @return bool True if the transient was deleted, false otherwise.
     */
    public function deleteSiteTransient(string $transient): bool;
}
