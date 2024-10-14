<?php

namespace WpService\Contracts;

interface DeleteTransient
{
/**
 * Deletes a transient.
 *
 * @since 2.8.0
 *
 * @param string $transient Transient name. Expected to not be SQL-escaped.
 * @return bool True if the transient was deleted, false otherwise.
 */
    public function deleteTransient(string $transient): bool;
}
