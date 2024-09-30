<?php

namespace WpService\Contracts;

interface DeleteTransient
{
    /**
     * Deletes a transient.
     *
     * @see https://developer.wordpress.org/reference/functions/delete_transient/
     *
     * @param string $transient Transient name. Expected to not be SQL-escaped.
     * @return bool True if the transient was deleted, false otherwise.
     */
    public function deleteTransient(string $transient): bool;
}
