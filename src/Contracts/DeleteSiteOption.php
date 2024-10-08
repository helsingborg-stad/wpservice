<?php

namespace WpService\Contracts;

interface DeleteSiteOption
{
    /**
 * Removes an option by name for the current network.
 *
 * @since 2.8.0
 * @since 4.4.0 Modified into wrapper for delete_network_option()
 *
 * @see delete_network_option()
 *
 * @param string $option Name of the option to delete. Expected to not be SQL-escaped.
 * @return bool True if the option was deleted, false otherwise.
 */
    public function deleteSiteOption(string $option): bool;
}
