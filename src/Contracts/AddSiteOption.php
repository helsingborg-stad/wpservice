<?php

namespace WpService\Contracts;

interface AddSiteOption
{
    /**
 * Adds a new option for the current network.
 *
 * Existing options will not be updated. Note that prior to 3.3 this wasn't the case.
 *
 * @since 2.8.0
 * @since 4.4.0 Modified into wrapper for add_network_option()
 *
 * @see add_network_option()
 *
 * @param string $option Name of the option to add. Expected to not be SQL-escaped.
 * @param mixed $value  Option value, can be anything. Expected to not be SQL-escaped.
 * @return bool True if the option was added, false otherwise.
 */
    public function addSiteOption(string $option, mixed $value): bool;
}
